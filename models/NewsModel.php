<?php
class NewsModel extends Model
{
  public $table = 'news';

  /**
   * Lấy danh sách phần tử
   */
  public function getListNews($start = 0, $limit = null)
  {
    $sql = $limit == null ? "" : " limit $start, $limit";
    $result = parent::getListAll("Select `$this->table`.title, `$this->table`.created_at, description, thumbnail, author, source, views, category_news_id, `$this->table`.id, categories_news.title as category_title from `$this->table` inner join categories_news on `$this->table`.category_news_id = categories_news.id order by `$this->table`.id desc" . $sql);

    return $result;
  }

  /**
   * Lấy số bản ghi
   */
  public function getRowCountNews()
  {
    $result = parent::getRowCount("Select id from `$this->table`");

    return $result;
  }

  /**
   * Lấy thông tin phần tử
   */
  public function getDetailNews($id)
  {
    $result = parent::getRecord("Select * from `$this->table` where id = $id");
    return $result;
  }

  /**
   * Thêm mới phần tử
   */
  public function addNewNews($fields)
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
  public function updateNews($id, $fields)
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
  public function deleteNews($id)
  {
    return parent::execute("Delete from `$this->table` where id = $id");
  }

  /**
   * Lấy danh sách bài viết theo category_news_id
   */
  public function getListNewsByCategoryNewsId($categoryNewsId)
  {
    $result = parent::getListAll("Select * from `$this->table` where category_news_id = $categoryNewsId order by id desc");

    return $result;
  }

  /**
   * Lấy danh sách bài viết mới nhất
   */
  public function getListNewsLastest($start = 0, $limit = 5)
  {
    $result = parent::getListAll("Select * from `$this->table` order by id desc limit $start, $limit");

    return $result;
  }

  /**
   * Lấy danh sách bài viết liên quan 
   */
  public function getListRecentNews($id, $categoryNewsId)
  {
    $result = parent::getListAll("Select * from `$this->table` where category_news_id = $categoryNewsId and id != $id order by id desc");

    return $result;
  }
}