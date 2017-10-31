# OrderByDistance
A Laravel package that manages `ORDER BY` clause sorting by distance.  
(This package is maintained under L5.5.)  

# Installation

Execute the following composer command.

    composer require sukohi/order-by-distance:1.*

# Preparation

This package is `Trait`.
So please add `OrderByDistanceTrait` to your model like so.

    <?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    use Sukohi\OrderByDistance\OrderByDistanceTrait;
    
    class Landmark extends Model
    {
        use OrderByDistanceTrait;
    }
    
Now you can use `orderByDistance()` through the Trait.

# Usage

    $columns = ['latitude', 'longitude'];
    $point = [35.681167, 139.767052];
    $direction = 'desc';    // Default is 'asc'.
    $landmarks = \App\Landmark::orderByDistance($columns, $point, $direction)->get();
    
# License

This package is licensed under the MIT License.

Copyright 2017 Sukohi Kuhoh