<?php
// start of main Shipper

    public function viewShipper(){
        $Shippers = Shipper::all();
        return view ('admin.Shipper', ['Shippers' => $Shippers]);
    }

public function saveNewShipper (Request $request)
{

    $validated = $request->validate([
        'company_name' => 'required|max:255',
        'address'  => 'required|max:255',
        'phone'  => 'required|max:255',
        'email' => 'required|max:255'

    ]);

    try {

        $sup = Shipper::create([
            'company_name' => $request->company_name
            'address' => $request->address
            'phone' => $request->phone
            'email' => $request->email

        ]);
        if (!is_null($cat)){
            Session::flash('message','Successfully added a new Shipper information');
        } else {
            throw new Exception('Unable to create a new Shipper information');
        }

    } catch (Exception $e) {
        Session::flash('error', 'Something went wrong, please try again later.');
    }
    return redirect ('/view_Shipper');
}

public function showNewFormShipper()
{
    return view('admin.new-Shipper');
}


public function deleteShipper($id)
{
    $Shipper = Shipper::find($id);
    $Shipper->delete();

    Session::flash('message', 'Successfully removed Shipper');
    return redirect('/view_Shipper');
}

public function showEditFormShipper($id)
{
        $Shipper = Shipper::find($id);
        if (!is_null($Shipper)){
            return view('admin.edit_Shipper', compact('Shipper'));
        }
        Session::flash('error', 'We cannot find the record you are searching for.');
        return redirect()->back();
}


public function saveShipperChanges(Request $request)
{

    $validated = $request->validate([
        'company_name' => 'required|max:255',
        'address'  => 'required|max:255',
        'phone'  => 'required|max:255',
        'email' => 'required|max:255'

    ]);


try {
    $id = $request->id;
    $Shipper = Shipper::find($id);
    $Shipper->update([
        'company_name' => $request->company_name
        'address' => $request->address
        'phone' => $request->phone
        'email' => $request->email

    ]);

    Session::flash('message', 'Successfully updated Shipper information!');
} catch (Exception $e) {
    Session::flash('error', 'Something went wrong, please try again later!');
}
    return redirect('/view_Shipper');


}

// end of main Shipper
?>