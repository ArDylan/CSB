<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index');
    }
    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'no_phone' => 'required|max:255',
            'location' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $customer = Customer::create($validatedData);

        if ($request->image) {
            $nameFile = $customer->id . ".png";

            $request->image->storeAs(
                'public/customer-image', $nameFile
            );

            $customer->update([
                'image' => $nameFile,
            ]);
        }

        return redirect(route('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validate = [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'no_phone' => 'required|max:255',
            'location' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $customer->update($validatedData);

        if ($request->image) {
            $nameFile = $customer->image . ".png";

            $request->image->storeAs(
                'public/customer-image', $nameFile
            );
            $customer->update([
                'image' => $nameFile,
            ]);
        }

        return redirect(route('customer'));
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        $nameFile = $customer->image . ".png";
        Storage::delete("public/customer-image/$nameFile");
        return back();
    }
}
