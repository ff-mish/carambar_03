<?php

class CommentAR extends CActiveRecord {

	const PUBLICHSED = 1;
	const UNPUBLISHED = 0;
	const BLOCKED = 3;

	public $commentscount = 0;
	public $flagcount = 0;
	public $commentcountinnode = 0;

	public function tableName() {
		return "comment";
	}

	public function primaryKey() {
		return "cid";
	}
  
	public static function model($class = __CLASS__) {
		return parent::model($class);
	}
  
	public function rules() {
		return array(
		    array("nid", "NidExist"),
		    array("content,uid, datetime, cid, status, name, email", "safe"),
		);
	}
  
	public function relations() {
		return array(
		    "user" => array(self::BELONGS_TO, "UserAR", "uid"),
		    "node" => array(self::BELONGS_TO, "NodeAR", "nid"),
		);
	}
  
	public function beforeSave() {
		if (!$this->getAttribute("datetime")) {
			$this->setAttribute("datetime", time());
		}
		return TRUE;
	}

	public function blockIt() {
		if ($this->cid) {
			$this->updateByPk($this->cid, array("status" => self::UNPUBLISHED));
		}
	}

	/**
	 * Get the comments count by uid
	 * @param $uid
	 */
	public function totalCommentsByUser($uid) {
		$query = new CDbCriteria();
		$query->select = array("count(*) AS commentscount");
		$query->addCondition("uid=:uid");
		$query->params[":uid"] = $uid;
		$query->addCondition("status=:status");
		$query->params[":status"] = 1;
		$res = $this->find($query);

		return $res->commentscount;
	}

	/**
	 * Get the comments count by nid
	 * @param $nid
	 */
	public function totalCommentsByNode($nid) {
		$query = new CDbCriteria();
		$query->select = "count(*) as commentcountinnode";
		$query->addCondition("nid=:nid");
		$query->params[":nid"] = $nid;
		$query->addCondition("status=:status");
		$query->params[":status"] = 1;
		$res = $this->find($query);

		return $res->commentcountinnode;
	}


}

