<?php 
$queue = new SplQueue();
$queue->enqueue('Huyen');
$queue->enqueue('Nho');
$queue->enqueue('Phong');

// dua con tro ve vi tri ban dau
$queue->rewind();
while($queue->valid()){
    echo '<br>' . $queue->current();
    $queue->next();
}

echo '<pre>';
print_r($queue);
echo '</pre>';

