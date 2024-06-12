<?php

include 'connect.php';
$pdo = ConnectToDataBase();
$sel = $pdo->query("select id_tovar from shopping_cart where shopping_cart.id_user = 2")->fetchAll(pdo::FETCH_ASSOC);
print_r($sel);
foreach ($sel as $key => $value) {
    print_r($value['id_tovar']);
}
//$tables = ['processor',  'graphics_card', 'computer', 'motherboard', 'ram_memory'];
//$result = [];
//foreach ($tables as $table) {
//    $stmt = $pdo->query("select * from tovar join type_tovar on tovar.id_type_tovar = type_tovar.id_type_tovar
//    join $table on $table.id_tovar = tovar.id_tovar where type_tovar.title = '$type_tovar'");
//    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//    if ($result) {
//        echo "ID $type_tovar относится к таблице $table";
//        break; // Если запись найдена, нет необходимости продолжать цикл
//    }
//}
//
//
//
//
//if (array_key_exists($columnName, $accostiation)) {
//    if (!isset($groupedRows[$accostiation[$columnName]])) {
//        $groupedRows[$accostiation[$columnName]] = [];
//    }
//    if (!in_array($columnValue, $groupedRows[$accostiation[$columnName]])) {
//        $groupedRows[$accostiation[$columnName]][] = $columnValue;
//    }
//}
//else {
//    if (!isset($groupedRows[$columnName])) {
//        $groupedRows[$columnName] = [];
//    }
//    if (!in_array($columnValue, $groupedRows[$columnName])) {
//
//        $groupedRows[$columnName][] = $columnValue;
//
//    }
//}
//
////<form method="post">
////                            <div class="block-filter">
////                                <h5>Тип памяти</h5>
////                                <div class="elem-with-checkbox">
////                                    <input class="form-check-input" type="checkbox"  >
////                                    <label class="form-check-label" >
////                                        Default checkbox
////</label>
////                                </div>
////                                <div class="elem-with-checkbox hidden">
////                                    <input class="form-check-input" type="checkbox"  >
////                                    <label class="form-check-label" >
////Hidden checkbox
////</label>
////                                </div>
////                                <a href="#" class="show-more">показать еще</a>
////                            </div>
////                            <div class="block-filter">
////                                <h5>Атрибут с интервалом</h5>
////                                <div class="row">
////                                    <div class="col">
////                                        <input type="text" class="form-control" placeholder="От *****">
////                                    </div>
////                                    <div class="col">
////                                        <input type="text" class="form-control" placeholder="До ******">
////                                    </div>
////                                </div>
////                            </div>
////                            <div class="button-container">
////                                <button type="submit" class="btn btn-use">Применить</button>
////                            </div>
////
////                        </form>
//
//foreach ($data as $row) {
//    foreach ($row as $columnName => $columnValue) {
//
//        if (array_key_exists($columnName, $accostiation)) {
//            if (!isset($groupedRows[$accostiation[$columnName]])) {
//                $groupedRows[$accostiation[$columnName]] = [];
//            }
//            $groupedRows[$accostiation[$columnName]][] = $columnValue;
//        }
//        else {
//            if (!isset($groupedRows[$columnName])) {
//                $groupedRows[$columnName] = [];
//            }
//
//            $groupedRows[$columnName][] = $columnValue;
//
//
//        }
//
//    }
