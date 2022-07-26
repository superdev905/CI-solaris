<?php

/**
 * Created by PhpStorm.
 * transaction: Minona
 * Date: 10/01/2017
 * Time: 19:48
 */
class Transaction_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $transaction_reference
     * @return array
     */
    public function get_transaction($transaction_reference = null)
    {
        if ($transaction_reference == null) {
            // fetch all
            $query = $this->db->get('transaction');
        } else {
            // fetch just one
            $query = $this->db->get_where('transaction', ['reference' => $transaction_reference]);
            // $this->db->select('transaction.*, agencies.name as agent_name');
            // $this->db->where('transaction.reference',$transaction_reference);
            // $this->db->join('agencies','agencies.id = transaction.b_detail_1_2');
            // $query = $this->db->get('transaction');
        }
        return $query->result();
    }

    public function get_my_transaction($s_email)
    {
        $query = $this->db->get_where('transaction', ['s_email' => $s_email]);
        return $query->result();
    }

    public function get_with_transaction($b_email)
    {
        $query = $this->db->get_where('transaction', ['b_email' => $b_email]);
        return $query->result();
    }

    public function create_transaction($transaction_data)
    {
        $this->db->insert('transaction', $transaction_data);
    }

    public function delete_transaction($transaction_reference)
    {
        $this->db->where(['reference' => $transaction_reference]);
        $this->db->delete('transaction');

    }

    /**
     * @param string $transaction_id
     * @param string $transaction_data
     * Update row
     * @return bool
     */
    public function update_transaction($transaction_id, $transaction_data)
    {
        $this->db->where('id', $transaction_id);
        $this->db->update('transaction', $transaction_data);
        return $this->db->affected_rows() > 1 ? true : false;
    }

    public function update_bulk_my_transaction($new_email, $old_email)
    {
        $this->db->where('s_email', $old_email);
        $transaction_data = array(
          's_email' => $new_email
        );
        $this->db->update('transaction', $transaction_data);
        return $this->db->affected_rows() > 1 ? true : false;
    }

    public function update_bulk_their_transaction($new_email, $old_email)
    {
        $this->db->where('b_email', $old_email);
        $transaction_data = array(
            'b_email' => $new_email
        );
        $this->db->update('transaction', $transaction_data);
        return $this->db->affected_rows() > 1 ? true : false;
    }
    
}