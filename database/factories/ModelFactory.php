<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Lifter::class, function (Faker\Generator $faker) {
    $arCargoTypes = array("NNPC Cargo","NNPC Falcon Cargo","CNL 77% + Carrry","NNPC Carry PayBack","CNL Falcon Cargo","CNL Equity","Equity");

    return [
        'name' => $arCargoTypes[array_rand($arCargoTypes)],
        'terminal_id' => $faker->numberBetween(1,5),
    ];
});

$factory->define(App\DocumentCategory::class, function (Faker\Generator $faker) {
    
    $arDocumentCategory = array("NXP Documents","BOL Documents","CCI Documents","NESS Return Documents","Other Cargo Documents","Demmurage Documents","Outtrn Documents");

    return [
        'name' => $arDocumentCategory[array_rand($arDocumentCategory)],
        'description' => $faker->sentence(),
    ];
});

$factory->define(App\Consignee::class, function (Faker\Generator $faker) {
    
    $arConsignee = array("CPC","NNPC Consignee","STATOIL Consignee","CONCOIL Consignee","Eastern Hydrocarbon Funding LTD","Western Hydrocarbon Funding");

    return [
        'name' => $arConsignee[array_rand($arConsignee)],
        'terminal_id' => $faker->numberBetween(1,5),
    ];
});

$factory->define(App\CargoType::class, function (Faker\Generator $faker) {
    
    $arCargoTypes = array("NNPC Cargo","NNPC Falcon Cargo","CNL 77% + Carrry","NNPC Carry PayBack","CNL Falcon Cargo","CNL Equity","Equity");

    return [
        'name' => $arCargoTypes[array_rand($arCargoTypes)],
        'terminal_id' => $faker->numberBetween(1,5),
    ];
});


$factory->define(App\Export::class, function (Faker\Generator $faker) {

	$arTerminal = array("Escravos","Agbami","EGTL","Pennington");
	$arProduct = array("Crude","Diesel","Naphtha","lpg","Condensate","Transmix");
	$arLifter = array("NNPC","CNL","STARTDEEP","TNOS","FAMFA");
	$arEP = array("EP","AGB","ESC","PN","US");
	$arCargoTypes = array("NNPC Cargo","NNPC Falcon Cargo","CNL 77% + Carrry","NNPC Carry PayBack","CNL Falcon Cargo","CNL Equity","Equity");

	$arConsignee = array("CPC","NNPC Consignee","STATOIL Consignee","CONCOIL Consignee","Eastern Hydrocarbon Funding LTD","Western Hydrocarbon Funding");


    return [
        'cargo_no' => $arEP[array_rand($arEP)].'-'.$faker->numberBetween(10,1000),
        'terminal' => $arTerminal[array_rand($arTerminal)],
        'product' => $arProduct[array_rand($arProduct)],
        'lifter' => $arLifter[array_rand($arLifter)],
        'cargo_type' => $arCargoTypes[array_rand($arCargoTypes)],
        'norminated_cargo' => $faker->numberBetween(400000,1000000),
        'actual_cargo' => $faker->numberBetween(400000,1000000),
        'bol_date' => $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'ship_figure' => $faker->numberBetween(400000,1000000),
        'nxp_no' => $faker->bankAccountNumber,
        'vessel' => $faker->catchPhrase,
        'date_range' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'eta' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'desination' => $faker->country,
        'inspector' =>  $faker->company,
        'vessel_agent' =>  $faker->company,

        'consignee' => $arConsignee[array_rand($arConsignee)],
        'dwt_of_vessel' => $faker->city,
        'flag_of_vessel' => $faker->state,
        'dpr_clearnace_date' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'nnpc_clearnace_date' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'di_date' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'nxp_date' => $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'ness_processed' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'csc_processed' => $faker->boolean(20),
        'has_outturn' => $faker->boolean(30),
        'has_lossclaim' => $faker->boolean(30),
        'has_demurrage' => $faker->boolean(30),
        'demurrage_amount' => $faker->numberBetween(0,100000),
        'cpc_notification_date' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'demurrage_ws_ready_date' => $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),
        'demurrage_approval_date' =>  $faker->dateTimeThisYear('2018-12-31 20:52:14', 'Africa/Lagos'),

        'document_link' => $faker->url,
        'user' => $faker->userName,
        'comment' => $faker->paragraph,
        'outturn_cost' =>$faker->numberBetween(0,100000),
        'loss_claim_amount' => $faker->numberBetween(0,100000),
 

    ];
});
