<?php

namespace App\Imports;

use App\Models\Activity;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ActivityImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Activity([
            'customer_phone' => $row['customer_phone'],
            'customer_name' => $row['customer_name'],
            'shipment_date' => $row['shipment_date'],
            'shipment_status' => $row['shipment_status'],
            'origin_address' => $row['origin_address'],
            'destination_address' => $row['destination_address'],
        ]);
    }
}
