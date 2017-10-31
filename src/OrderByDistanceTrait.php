<?php

namespace Sukohi\OrderByDistance;

trait OrderByDistanceTrait {

	public function scopeOrderByDistance($query, $columns, $point, $direction = 'asc') {

	    $column_lat = $columns[0];
	    $column_lon = $columns[1];
	    $point_lat = (float) $point[0];
	    $point_lon = (float) $point[1];

        return $query->orderBy(
            \DB::raw(
                'ABS(`'. $column_lat .'` - '. $point_lat .')'.
                ' + '.
                'ABS(`'. $column_lon .'` - '. $point_lon .')'
            ),
            $direction
        );

    }

}