<?php

class TB {
	static $member = 'MEMBER';

	private $tb;

	private $select_query;

	private $from_query;

	private $col_query;

	private $where_query;
	private $where_cnt = 0;

	private $order_by_query;
	private $order_by_cnt = 0;

	function __construct($tbName) {
		$this->select_query = "SELCT *";
		$this->from_query = "FROM $tbName";
		$this->tb = $tbName;
	}

	function col($col) {
		$this->col_query .= ", $col";

		return $this;
	}

	function where($where) {
		$this->where_cnt++;

		if ($this->where_cnt == 1) {
			$this->where_query .= " WHERE $where";
		} else {
			$this->where_query .= " AND $where";
		}

		return $this;
	}

	function orderByAsc($orderBy) {
		$this->order_by_cnt++;

		if ($this->order_by_cnt == 1) {
			$this->order_by_query .= " ORDER BY $orderBy ASC";
		} else {
			$this->order_by_query .= " $orderBy ASC";
		}

		return $this;
	}

	function orderByDesc($orderBy) {
		$this->order_by_cnt++;

		if ($this->order_by_cnt == 1) {
			$this->order_by_query .= " ORDER BY $orderBy DESC";
		} else {
			$this->order_by_query .= " $orderBy DESC";
		}

		return $this;
	}

	function getQuery() {
		return
			"$this->select_query $this->col_query $this->from_query 
			$this->where_query $this->order_by_query";
	}

	function getData() {
		return $this->select_query . ' ' . $this->where_query . ' ' . $this->order_by_query;
	}

	function getList() {
		return "SELECT * FROM $this->tb";
	}
}
