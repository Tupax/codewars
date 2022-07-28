<?php

// You are given a node that is the beginning of a linked list. This list always contains a tail and a loop. Your objective is to determine the length of the loop.
// For example in the following picture the tail's size is 3 and the loop size is 12:


# Use the `next' method to get the following node.
// node.next

// Use the Node::getNext() instance method to get the following node.

// $node->getNext();
// Note: do NOT mutate the nodes!
class Node{
  public function getNext(){
    return 0;
  }
}


function loop_size(Node $n): int {
  $a = [];
  while (!in_array($n, $a, true)) {
    array_push($a, $n);
    $n = $n->getNext();
  }
  return count($a) - array_search($n, $a, true);
}
  // var_dump(loop_size(Node::createChain(0, 1)));


  // Cant do test because i don't have access to createChain function
