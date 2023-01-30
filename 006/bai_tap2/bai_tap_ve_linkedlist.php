<?php
class ListNode {
    public ?string $data = null;
    public $next = null;

    public function __construct(string $data = null) {
        $this->data = $data;
    }
}
class LinkedList
{
    public int $count=0;
    public object $firstNode;
    public object $lastNode;
}