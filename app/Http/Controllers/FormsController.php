<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\Package;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FormsController extends Controller
{
    // Form Elements - Input
    public function input()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input"]
        ];
        return view('/content/forms/form-elements/form-input', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
  public function service()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input"]
        ];
        return view('/content/forms/form-elements/form-service', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }


//   public function store(Request $request)
// {
//     // Validate the request data
//     $validatedData = $request->validate([
//         'package_name' => 'required',
//         'description' => 'required',
//         'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Make the image field optional
//     ]);

//     // Process and store the image if it was uploaded
//     if ($request->hasFile('image')) {
//         $image = $request->file('image');
//         $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
//         Storage::disk('public')->putFileAs('images', $image, $imageName);
//         $validatedData['image'] = 'images/' . $imageName;
//     } else {
//         // Set the image to null if no image was uploaded
//         $validatedData['image'] = null;
//     }

//     // Create a new package instance
//     $package = new Package();
//     $package->package_name = $validatedData['package_name'];
//     $package->description = $validatedData['description'];
//     $package->image = $validatedData['image'];
//     $package->save();

//     // Redirect to a success page or perform other actions
//     return redirect()->route('form-service')->with('success', 'Package created successfully');
// }

  public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
        ]);

        // Create a new package instance
        $package = new Package();
        $package->package_name = $validatedData['package_name'];
        $package->description = $validatedData['description'];
        $package->save();

        // Redirect to a success page or perform other actions
        return redirect()->route('form-service')->with('success', 'Package created successfully');
    }
    public function package()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "package"]
        ];
        return view('/content/forms/form-elements/form-package', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
  

public function service_list()
{
    $breadcrumbs = [
        ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Advanced"]
    ];

    // Fetch all packages from the database
    $packages = Package::all();

    // Pass the packages data to the view
    return view('/content/forms/form-elements/service_list', [
        'breadcrumbs' => $breadcrumbs,
        'packages' => $packages,
    ]);
}

    public function editPackage($id)
    {
        // Find the package by its ID
        $package = Package::find($id);

        // Return the edit view with the package data
        return view('/content/forms/form-elements/edit_package', compact('package'));
    }

    public function updatePackage(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
        ]);

        // Find the package by its ID
        $package = Package::find($id);

        // Update the package data
        $package->package_name = $validatedData['package_name'];
        $package->description = $validatedData['description'];
        $package->save();

        // Redirect back to the service list with a success message
        return redirect()->route('form-service_list')->with('success', 'Package updated successfully');
    }

public function deletePackage($id)
{
    // Find the package by its ID and delete it
    Package::destroy($id);

    // Redirect back to the service list with a success message
    return redirect()->route('form-service_list')->with('success', 'Package deleted successfully');
}

    // Form Elements - Input-groups
    public function input_groups()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input Groups"]
        ];
        return view('/content/forms/form-elements/form-input-groups', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Input-mask
    public function input_mask()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input Mask"]
        ];
        return view('/content/forms/form-elements/form-input-mask', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Textarea
    public function textarea()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Textarea"]
        ];
        return view('/content/forms/form-elements/form-textarea', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Checkbox
    public function checkbox()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Checkbox"]
        ];
        return view('/content/forms/form-elements/form-checkbox', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Radio
    public function radio()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Radio"]
        ];
        return view('/content/forms/form-elements/form-radio', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - custom_options
    public function custom_options()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Custom Options"]
        ];
        return view('/content/forms/form-elements/form-custom-options', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Switch
    public function switch()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Switch"]
        ];
        return view('/content/forms/form-elements/form-switch', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Select
    public function select()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Select"]
        ];
        return view('/content/forms/form-elements/form-select', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Number Input
    public function number_input()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Number Input"]
        ];
        return view('/content/forms/form-elements/form-number-input', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // File Uploader
    public function file_uploader()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "File Uploader"]
        ];
        return view('/content/forms/form-elements/form-file-uploader', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Quill Editor
    public function quill_editor()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Quill Editor"]
        ];
        return view('/content/forms/form-elements/form-quill-editor', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Elements - Date & time Picker
    public function date_time_picker()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Date & Time Picker"]
        ];
        return view('/content/forms/form-elements/form-date-time-picker', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Layouts
    public function layouts()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Layouts"]
        ];
        return view('/content/forms/form-layout', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Wizard
    public function wizard()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Wizard"]
        ];
        return view('/content/forms/form-wizard', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Form Validation
    public function validation()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Validation"]
        ];
        return view('/content/forms/form-validation', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    // Form repeater
    public function form_repeater()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Forms"], ['name' => "Form Repeater"]
        ];
        return view('/content/forms/form-repeater', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
