<?php
$q = new SplStack();
$q->push('Huyen');
$q->push('Nho');
$q->push('Phong');

// di chuyen con tro ve lai vi tri dau tien
$q->rewind();
while($q->valid()){
    // lay ra phan tu dau tien trong danh sach
    echo '<br>'. $q->current();
    // Di chuyen con tro den vi tri tiep theo
    $q->next();

}
echo '<pre>';
print_r($q);
echo '</pre>';

