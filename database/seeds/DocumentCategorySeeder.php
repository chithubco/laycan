<?php

use App\DocumentCategory;
use Illuminate\Database\Seeder;

class DocumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentCategory::create([
        	'name' => 'Cargo NXP Documents',
        	'description' => 'Document Categor for all NXP document. Please lable CARGO_NUMBER_NXP_DATE'

        ]);
        DocumentCategory::create([
        	'name' => 'Cargo BOL Documents',
        	'description' => 'Document Categor for all NXP document. Please lable CARGO_NUMBER_NXP_DATE'

        ]);
        DocumentCategory::create([
        	'name' => 'Cargo CCI Documents',
        	'description' => 'Document Categor for all NXP document. Please lable CARGO_NUMBER_NXP_DATE'

        ]);
        DocumentCategory::create([
        	'name' => 'Cargo Demmurage Documents',
        	'description' => 'Document Categor for all NXP document. Please lable CARGO_NUMBER_NXP_DATE'

        ]);
    }
}
