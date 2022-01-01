<?php

include 'Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Binary Search Tree
 */
class BinarySearchTree
{
    public $root;
    public function __construct()
    {
        $this->root = null;
    }

    public function recursiveInsert($new, $node)
    {
        if ($node == null) {
            $node = $new;
        }
        elseif ($new->data <= $node->data) {
            if ($node->left == null) {
                $node->left = $new;
                $new->root = $node;
            } else {
                $this->recursiveInsert($new, $node->left);
            }
        } else {
            if ($node->right == null) {
                $node->right = $new;
                $new->root = $node;
            } else {
                $this->recursiveInsert($new, $node->right);
            }
        }
    }

    public function recursiveSearch($target, $node)
    {
        if ($target == $node->data) {
            return 1;
        } elseif ($target > $node->data) {
            return $this->recursiveSearch($target, $node->right);
        } elseif ($target <= $node->data) {
            return $this->recursiveSearch($target, $node->left);
        } else {
            return 0;
        }
    }

    public function insert($node)
    {
        $this->recursiveInsert($node, $this->root);
    }

    public function search($item)
    {
        return $this->recursiveSearch($item, $this->root);
    }

    public function recursiveTraverseTree($node)
    {
        if ($node->left != null)
        {
            $this->recursiveTraverseTree($node->left);
        }
        if ($node->right != null)
        {
            $this->recursiveTraverseTree($node->right);
        } 
        echo $node->value;
    }

    public function traverse()
    {
        $this->recursiveTraverseTree($this->root);
    }
}

$binarySearchTree = new BinarySearchTree();
/*
 * BST tree example      56 
 * 				      /      \
 * 				  30            70
 *              /    \        /    \
 *            22     40     60      95
 *          /                  \
 *        11                    65
 *      /    \                /    \
 *     3     16             63     67
 */

$node1 = new Node(56);
$node2 = new Node(30);
$node3 = new Node(22);
$node4 = new Node(40);
$node5 = new Node(11);
$node6 = new Node(3);
$node7 = new Node(16);
$node8 = new Node(70);
$node9 = new Node(60);
$node10 = new Node(95);
$node11 = new Node(65);
$node12 = new Node(63);
$node13 = new Node(67);

$binarySearchTree->insert($node1);
$binarySearchTree->insert($node2);
$binarySearchTree->insert($node3);
// $binarySearchTree->insert($node4);
// $binarySearchTree->insert($node5);
// $binarySearchTree->insert($node6);
// $binarySearchTree->insert($node7);
// $binarySearchTree->insert($node8);
// $binarySearchTree->insert($node9);
// $binarySearchTree->insert($node10);
// $binarySearchTree->insert($node11);
// $binarySearchTree->insert($node12);
// $binarySearchTree->insert($node13);

// $check = $binarySearchTree->search(5);
// if ($check = 1) {
//     echo "Search Data is Found in the Tree";
// } else {
//     echo "Search Data is Not Found in the Tree";
// }
$binarySearchTree->traverse();
