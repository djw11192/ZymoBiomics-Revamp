<?php
/**
 * mudThemes Pagination Class
 */
class MudThemes_Pagination {
    
    private $query;
    
    private $strip_length = 9;
    
    private $strip_middle = 5;
    
    private $strip_last_number;
    
    private $strip_initial_number = 1;
    
    private $max_pages;
    
    private $current_page;

    private function set_max_num_pages() {
        $this->max_pages = (int)$this->query->max_num_pages;
    }
    
    private function set_current_page() {
        $this->current_page = (int)$this->query->query_vars['paged'] ? $this->query->query_vars['paged'] : 1;
    }
    
    private function is_paged() {
        return (boolean)$this->query->is_paged;
    }
    
    public function set_query($q) {
        $this->query = $q;
        $this->set_strip();
    }
    
    public function set_strip() {
        $this->set_current_page();
        $this->set_max_num_pages();
        $this->strip_initial_number = $this->current_page <= $this->strip_middle ? 1 : $this->strip_initial_number + ($this->current_page - $this->strip_middle);
        $this->strip_last_number = $this->max_pages <= $this->strip_length ? $this->max_pages : $this->current_page + ($this->current_page - $this->strip_initial_number) ;
        
        //echo $this->strip_last_number;
    }
    
    public function get_strip() {
        
    }
}

function mudthemes_get_pagination() {
    $mudthemes_pagination_obj = new MudThemes_Pagination();
    add_action('loop_start', array($mudthemes_pagination_obj, 'set_query'));
}
mudthemes_get_pagination();