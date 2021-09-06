<?php

class MarriageHalls_model extends CI_Model
{

  public function get($limit=NULL,$offset=NULL,$tosearch=NULL)
  {
      if ($limit != NULL) {
        $this->db->limit($limit,$offset);
      }
      if ($tosearch != NULL) {
          $this->db->or_like($tosearch);
      }
      $this->db->from('marriage_halls');
      $query = $this->db->get();
      return $query->result();
  }
  public function count_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('marriage_halls');

    return $query->num_rows();
  }



  public function get_by_id($condition)
  {
      $this->db->from('marriage_halls');
      $this->db->where($condition);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('marriage_halls',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('marriage_halls');
      return TRUE;
  }
  public function update($data,$condition)
  {
      $this->db->update('marriage_halls',$data,$condition);
      return TRUE;
  }

}
