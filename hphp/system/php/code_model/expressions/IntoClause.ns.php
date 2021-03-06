<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  into identifier query_clauses
 */
class IntoClause /*implements IIntoClause*/ {
  use QueryClause;
  use Node;

  private /*?string*/ $identifier;
  private /*?Vector<IQueryClause>*/ $clauses;

  /**
   *  into identifier query_clauses
   */
  public function getIdentifier() /*: string*/ {
    if ($this->identifier === null) {
      throw new \Exception("Identifier is not initialized");
    }
    return $this->identifier;
  }
  /**
   *  into identifier query_clauses
   */
  public function setIdentifier(/*string*/ $value) /*: this*/ {
    $this->identifier = $value;
    return $this;
  }

  /**
   *  into identifier query_clauses
   */
  public function getClauses() /*: Vector<IQueryClause>*/ {
    if ($this->clauses === null) {
      $this->clauses = Vector {};
    }
    return $this->clauses;
  }
  /**
   *  into identifier query_clauses
   */
  public function setClauses(/*Vector<IQueryClause>*/ $value) /*: this*/ {
    $this->clauses = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitIntoClause($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitIntoClause")) {
      // UNSAFE
      return $visitor->visitIntoClause($this);
    } else if (method_exists($visitor, "visitExpression")) {
      // UNSAFE
      return $visitor->visitExpression($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->clauses !== null) {
      foreach ($this->clauses as $elem) {
        yield $elem;
      }
    }
  }
}
}
