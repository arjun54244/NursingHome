<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $testimonial = Testimonial::all();
        return view('service' , compact('services', 'testimonial'));
    }
    public function ServiceDep(string $department)
    {
        
        $servicesDec = Service::all()->where('department','=',$department);
        
        $testimonial = Testimonial::all();
        return view('service' , compact('servicesDec', 'testimonial'));
    }
    //ServiceDepartment
    public function ServiceDepartment(){
        $allowedDepartments = [
            'GeneralSurgery',
            'GynecologyAndObstetrics',
            'InternalMedicine',
            'PediatricChildSpecialist',
            'Anaesthesiology',
            'LaserLaprascopicSurgeon',
            'Endocrinologist',
            'Ultrasound',
            'PathologyAndLab'
        ];

        $servicesDec = Service::where('status', 1)
        ->whereIn('department', $allowedDepartments)
        ->get();

       
        return view('service' , compact('servicesDec'));
    }
    public function show($slug)
    {
        $services = Service::all();
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('service-single', compact('service', 'services'));
    }
}
