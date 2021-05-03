<?php
class CategoryProductModel extends Model
{
  public $table = 'categories_product';

  /**
   * Lấy danh sách phần tử
   */
  public function getListCategoryProduct($where = "")
  {
    $result = parent::getListAll("Select * from `$this->table` $where order by type desc");

    return $result;
  }

  /**
   * Lấy số bản ghi
   */
  public function getRowCountCategoryProduct()
  {
    $result = parent::getRowCount("Select id from `$this->table`");

    return $result;
  }

  /**
   * Lấy thông tin phần tử
   */
  public function getDetailCategoryProduct($id)
  {
    $result = parent::getRecord("Select * from `$this->table` where id = $id");
    return $result;
  }

  /**
   * Thêm mới phần tử
   */
  public function addNewCategoryProduct($fields)
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
  public function updateCategoryProduct($id, $fields)
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
  public function deleteCategoryProduct($id)
  {
    return parent::execute("Delete from `$this->table` where id = $id");
  }
}