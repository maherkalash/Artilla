<?php

class Artella_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add_post($user_id, $course_id, $title, $body, $time) {
        $insert = array (
                            'course_id'   => $course_id,
                            'user_id'     => $user_id,
                            'title'       => $title,
                            'post'        => $body,
                            'insert_date' => $time,
                            'last_update' => $time
                        );
        $this->db->insert('courses_posts', $insert);
        return $this->db->insert_id();
    }

    public function get_requestion($id, $ques_id=0) {
        $ques_id = $this->get_ques_id($id, $ques_id);

        $question = $this->db->get_where('repeated_questions', array('id' => $ques_id, 'active' => 1));
        return $question;
    }

    public function get_requestions($id) {
        $result = $this->db->get_where('repeated_questions', array('course_id' => $id, 'active' => 1));
        return $result;
    }

    public function get_ques_id($id, $ques_id=0) {
        if (!$ques_id) {
            $sql = "SELECT id FROM repeated_questions WHERE course_id=$id AND active=1 ORDER BY id DESC LIMIT 1";
            $row = $this->db->query($sql);
            if ($row->num_rows()) {
                $ques_id = $row->row()->id;
                return $ques_id;
            }
        }
        return $ques_id;
    }

    public function get_quiz($id, $ques_id=0) {
        $ques_id = $this->get_ques_id($id, $ques_id);

        $question = $this->db->get_where('licenses', array('id' => $ques_id, 'active' => 1));
        return $question;
    }

    public function get_quizs($id) {
        $result = $this->db->get_where('licenses', array('course_id' => $id, 'active' => 1));
        return $result;
    }

    public function get_quiz_id($id, $quiz_id=0) {
        if (!$quiz_id) {
            $sql = "SELECT id FROM licenses WHERE course_id=$id AND active=1 ORDER BY id DESC LIMIT 1";
            $row = $this->db->query($sql);
            if ($row->num_rows()) {
                $quiz_id = $row->row()->id;
                return $quiz_id;
            }
        }
        return $quiz_id;
    }

    public function get_questions($id) {
        $sql = "SELECT p.id post_id, CONCAT_WS(' ', u.username, u.lastname) poster, p.title, (SELECT COUNT(id) FROM posts_comments WHERE post_id=p.id) comments_count
                  FROM courses_posts p, user u
                 WHERE p.course_id=$id
                   AND p.user_id=u.id
              ORDER BY last_update DESC, p.id DESC";
        $result = $this->db->query($sql);
        return $result;
       // echo "<pre>"; print_r($result->result()); exit();
    }

    function get_post_id($id, $post_id=0) {
        if (!$post_id) {
            $sql = "SELECT id FROM courses_posts WHERE course_id=$id ORDER BY last_update DESC LIMIT 1";
            $post_id = $this->db->query($sql)->row()->id;
        }
        return $post_id;
    }

    public function get_post($id, $post_id=0) {
        if (!$post_id) {
            $sql = "SELECT id FROM courses_posts WHERE course_id=$id ORDER BY last_update DESC LIMIT 1";
            $post_id = $this->db->query($sql)->row()->id;
        }

        $sql = "SELECT c.id, c.title, CONCAT_WS(' ', u.username, u.lastname) poster, c.post, c.insert_date, u.face_photo, u.photo 
                  FROM courses_posts c, user u 
                 WHERE u.id=c.user_id AND c.id=$post_id
              ORDER BY c.id DESC";
        //echo "<pre>"; print_r($this->db->query($sql)->result()); exit();
        $result = $this->db->query($sql);
        return $result;
    }

    public function add_comment($user_id, $post_id, $comment, $time) {
        $insert = array (
                            'post_id' => $post_id,
                            'comment' => $comment,
                            'insert_date' => $time,
                            'user_id' => $user_id
                        );
        $this->db->insert('posts_comments', $insert);
        return $this->db->insert_id();
    }

    public function add_reply($user_id, $comment_id, $comment, $time) {
        $insert = array (
            'comment_id'  => $comment_id,
            'reply'       => $comment,
            'insert_date' => $time,
            'user_id'     => $user_id
        );
        $this->db->insert('comments_replys', $insert);
        return $this->db->insert_id();
    }

    public function get_comments($id, $post_id=0) {
        if (!$post_id) {
            $sql = "SELECT id FROM courses_posts WHERE course_id=$id ORDER BY last_update DESC LIMIT 1";
            $post_id = $this->db->query($sql)->row()->id;
        }

        $sql = "SELECT c.id comment_id, c.comment, r.id reply_id, r.reply, CONCAT_WS(' ', u.username, u.lastname) poster
                  FROM posts_comments c
             LEFT JOIN comments_replys r ON r.comment_id=c.id
                  JOIN user u ON u.id=c.user_id
                 WHERE post_id=$post_id
              ORDER BY c.id";
        $result = $this->db->query($sql);
        return $result;
        //echo "<pre>"; print_r($this->db->query($sql)->result()); exit();
    }
}