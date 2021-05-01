<?php
class CategoryNewsModel extends Model
{
  public $table = 'categories_news';

  /**
   * Lấy danh sách phần tử
   */
  public function getListCategoryNews()
  {
    $result = parent::getListAll("Select * from `$this->table` order by id desc");

    return $result;
  }

  /**
   * Lấy số bản ghi
   */
  public function getRowCountCategoryNews()
  {
    $result = parent::getRowCount("Select id from `$this->table`");

    return $result;
  }

  /**
   * Lấy thông tin phần tử
   */
  public function getDetailCategoryNews($id)
  {
    $result = parent::getRecord("Select * from `$this->table` where id = $id");
    return $result;
  }

  /**
   * Thêm mới phần tử
   */
  public function addNewCategoryNews($fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      $values[] = "`$key`='$val'";
    }
    $sql = "Insert into `$this->table` set " . implode(',', $values);

    return parent::execute($sql);
  }

  /**
   * Update phần tử
   */
  public function updateCategoryNews($id, $fields)
  {
    $values = [];
    foreach ($fields as $key => $val) {
      $values[] = "`$key`='$val'";
    }
    $sql = "Update `$this->table` set " . implode(',', $values) . " where id = $id";

    return parent::execute($sql);
  }

  /**
   * Xoá phần tử
   */
  public function deleteCategoryNews($id)
  {
    return parent::execute("Delete from `$this->table` where id = $id");
  }
}