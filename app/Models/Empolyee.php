<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empolyee extends Model
{
    use HasFactory;
    use Notifiable;
    private static $employee, $image, $extension, $directory, $imageName, $imageUrl, $message;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.' . self::$extension;
        self::$directory = 'employee-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function newEmployee($request)
    {
        self::$employee = new Empolyee();
        self::$employee->name = $request->name;
        self::$employee->email = $request->email;
        self::$employee->password = bcrypt($request->password);
        self::$employee->number = $request->number;
        self::$employee->address = $request->address;
        self::$employee->salary = $request->salary;
        self::$employee->hire_date = $request->hire_date;
        self::$employee->image = self::getImageUrl($request);
        self::$employee->save();
    }

    public static function employeeStatusUpdate($id)
    {
        self::$employee = Empolyee::find($id);
        if (self::$employee->status == 1)
        {
            self::$employee->status = 0;
            self::$message = 'This Employee account is Restricted';
        }
        else
        {
            self::$employee->status = 1;
            self::$message = 'Employee Account is Active';
        }
        self::$employee->save();
        return self::$message;
    }

    public function routeNotificationForDatabase()
    {
        return $this->id; // Return the appropriate notifiable ID (e.g., employee ID)
    }


    public function orders()
    {
        return $this->hasMany(Order::class, 'employee_id', 'id');
    }
}
