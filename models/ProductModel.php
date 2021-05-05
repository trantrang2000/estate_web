<?php
class ProductModel extends Model
{
  public $table = 'products';

  /**
   * Lấy danh sách phần tử
   */
  public function getListProduct($start = 0, $limit = null, $orderBy = "id", $orderDir = "desc", $where = "")
  {
    $sql = $limit == null ? "" : " limit $start, $limit";
    $result = parent::getListAll("Select * from `$this->table` $where order by $orderBy $orderDir" . $sql);

    return $result;
  }

  /**
   * Lấy số bản ghi
   */
  public function getRowCountProduct()
  {
    $result = parent::getRowCount("Select id from `$this->table`");

    return $result;
  }

  /**
   * Lấy thông tin phần tử
   */
  public function getDetailProduct($id)
  {
    $result = parent::getRecord("Select * from `$this->table` where id = $id");
    return $result;
  }

  /**
   * Thêm mới phần tử
   */
  public function addNewProduct($fields)
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
  public function updateProduct($id, $fields)
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
  public function deleteProduct($id)
  {
    return parent::execute("Delete from `$this->table` where id = $id");
  }

  /**
   * Lấy danh sách bài viết theo category_product_id
   */
  public function getListProductByCategoryProductId($categoryProductId)
  {
    $result = parent::getListAll("Select * from `$this->table` where category_product_id = $categoryProductId and status = 1 order by id desc");

    return $result;
  }

  /**
   * Lấy danh sách bài viết liên quan 
   */
  public function getListRecentProduct($id, $categoryProductId)
  {
    $result = parent::getListAll("Select * from `$this->table` where id != $id and category_product_id = $categoryProductId order by id desc");

    return $result;
  }
}