<?php

/**
 *
 * @link       https://wordpress.org/plugins/treepress
 * @since      1.0.0
 *
 * @package    Treepress
 * @subpackage Treepress/includes
 */

/**
 *
 *
 * @since      1.0.0
 * @package    Treepress
 * @subpackage Treepress/includes
 * @author     Md Kabir Uddin <bd.kabiruddin@gmail.com>
 */
class Treepress_Node {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	var $post_id;
	var $gender;
	var $spouse;
	var $partners;
	var $father;
	var $mother;
	var $born;
	var $died;
	var $thumbsrc;
	var $thumbhtml;

	var $children;
	var $siblings;

	var $name;
	var $name_father;
	var $name_mother;
	var $url;
	var $url_father;
	var $url_mother;

	function __construct() {
		$children = array();
	}

	static function get_node($post) {
		$node = new Treepress_Node();
		$node->post_id 	= $post->ID;
		$node->name 		= $post->post_title;
		$node->url		= get_permalink($post->ID);
		$node->gender	= get_post_meta($post->ID, 'gender', true);
		$node->father	= get_post_meta($post->ID, 'father', true);
		$node->mother	= get_post_meta($post->ID, 'mother', true);
		$node->spouse	= get_post_meta($post->ID, 'spouse', true);
		$node->born	= get_post_meta($post->ID, 'born', true);
		$node->died	= get_post_meta($post->ID, 'died', true);
		if (function_exists('get_post_thumbnail_id')) {
			$thumbid = get_post_thumbnail_id($post->ID);
			$thumbsrc = wp_get_attachment_image_src($thumbid, 'thumbnail');
			$node->thumbsrc = $thumbsrc[0];
			$node->thumbhtml = get_the_post_thumbnail($post->ID, 'thumbnail');
		}
		return $node;
	}

	public function more_fact_check($post_id){
		if(!get_post_meta($this->post_id, 'more_fact_label', true)) {
			return false;
		}

		if(!get_post_meta($this->post_id, 'more_fact_label', true)[0]) {
			return false;
		}
		return true;
	}


	public function get_html($the_family) {
		$treepress = new Treepress;
		$html = '<table border="0" width="100%">';
		$html .= '<tr><td width="33.333333%" style="vertical-align:bottom"><b><a href="'.$this->url.'">';
		if (!empty($this->thumbhtml)) {
			$html .= $this->thumbhtml;
		}
		$html .= "<br>".$this->name.'</a> </b>';
		$plugloc = treepress_plugin_dir_url;

		if ($this->gender == 'm') {
			$html .= '<img alt="Male" title="Male" src="'.$plugloc.'public/imgs/icon-male-small.gif"/>';
		} else if ($this->gender == 'f') {
			$html .= '<img alt="Female" title="Female" src="'.$plugloc.'public/imgs/icon-female-small.gif"/>';
		} else {
			$html .= '<img alt="Gender not specified" title="Gender not specified" src="'.$plugloc.'public/imgs/icon-qm-small.gif"/>';
		}



		$terms = wp_get_post_terms($this->post_id, 'family');
		if($terms){
			$term_id = $terms[0]->term_id;
			$ftlink = get_term_meta( $term_id, 'family_tree_link', true);
		} else {
			$ftlink = '';
		}

		if (strpos($ftlink, '?') === false) {
			$html .=' <a href="'.$ftlink.'?ancestor='.$this->post_id.'"><img border="0" alt="View tree" title="View tree" src="'.$plugloc.'public/imgs/icon-tree-small.gif"/></a>';
		} else {
			$html .=' <a href="'.$ftlink.'&ancestor='.$this->post_id.'"><img border="0" alt="View tree" title="View tree" src="'.$plugloc.'public/imgs/icon-tree-small.gif"/></a>';
		}

		$html .= '</td>';
		$html .= '<td style="vertical-align:bottom" width="33.333333%">Born: '.$this->born.'</td>';
		if (!empty($this->died) && strlen($this->died) > 1) {
			$html .= '<td style="vertical-align:bottom" width="33.333333%">Died: '.	$this->died.'</td>';
		} else {
			$html .= '<td></td>';
		}
		$html .= '</tr>';
		$html .= '<tr><td>'.__('Father: ', 'treepress');
		if (isset($this->name_father)) {
			$html .= '<a href="'.$this->url_father.'">'.$this->name_father.'</a>';
		} else {
			$html .= __('Unspecified', 'treepress');
		}
		$html .= '</td>';
		$html .= '<td colspan="2">'.__('Mother: ', 'treepress');
		if (isset($this->name_mother)) {
			$html .= '<a href="'.$this->url_mother.'">'.$this->name_mother.'</a>';
		} else {
			$html .= __('Unspecified', 'treepress');
		}
		$html .= '</td></tr>';
		$html .= '<tr><td colspan="4">'.__('Children: ', 'treepress');

		if (isset($this->children) && count($this->children) > 0) {
			$first = true;
			foreach ($this->children as $child) {
				if (!$first) {
					$html .= ', ';
				} else {
					$first = false;
				}
				$html .= '<a href="'.$the_family[$child]->url.'">'.$the_family[$child]->name.'</a>';
			}
		} else {
			$html .= 'none';
		}
		$html .= '</td></tr>';
		$html .= '<tr><td colspan="4">'.__('Siblings: ', 'treepress');
		if (count($this->siblings) > 0) {
			$first = true;
			foreach ($this->siblings as $sibling) {
				if (!$first) {
					$html .= ', ';
				} else {
					$first = false;
				}
				$html .= '<a href="'.$the_family[$sibling]->url.'">'.$the_family[$sibling]->name.'</a>';
			}
		} else {
			$html .= 'none';
		}
		$html .= '</td></tr>';


			$ifarray = array(
				array(
					'name' => 'Address',
					'display' => __('Address', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Adoption',
					'display' => __('Adoption', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Baptism',
					'display' => __('Baptism', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Bar Mitzvah',
					'display' => __('Bar Mitzvah', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Bat Mitzvah',
					'display' => __('Bat Mitzvah', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Burial',
					'display' => __('Burial', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Circumcision',
					'display' => __('Circumcision', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Confirmation',
					'display' => __('Confirmation', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Confirmation (LDS)',
					'display' => __('Confirmation (LDS)', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Cremation',
					'display' => __('Cremation', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Divorced',
					'display' => __('Divorced', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => __('Emigration', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Employment',
					'display' => __('Employment', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Endowment (LDS)',
					'display' => __('Endowment (LDS)', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Funeral',
					'display' => __('Funeral', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Immigration',
					'display' => __('Immigration', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Known as',
					'display' => __('Known as', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Medical Condition',
					'display' => __('Medical Condition', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Military Serial Number',
					'display' => __('Military Serial Number', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Military Service',
					'display' => __('Military Service', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Mission (LDS)',
					'display' => __('Mission (LDS)', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Nationality',
					'display' => __('Nationality', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Occupation',
					'display' => __('Occupation', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Religion',
					'display' => __('Religion', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Sealed to Parents (LDS)',
					'display' => __('Sealed to Parents (LDS)', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Social Security Number',
					'display' => __('Social Security Number', 'treepress'),
					'type' => 'text',
				),
				array(
					'name' => 'Title',
					'display' => __('Title', 'treepress'),
					'type' => 'text',
				),
			);

			$sfarray = array(
				array(
					'name' => 'Banns',
					'display' => __('Banns', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Divorce',
					'display' => __('Divorce', 'treepress'),
					'type' => 'date',
				),
				array(
					'name' => 'Sealed to Spouse (LDS)',
					'display' => __('Sealed to Spouse (LDS)', 'treepress'),
					'type' => 'date',
				),
			);


		$ifarray_check = array();
		foreach ($ifarray as $key => $ifarray_item) {
			if(get_post_meta($this->post_id, strtolower(str_replace(' ', '_', $ifarray_item['name'])), true)) {
				array_push($ifarray_check, '1');
			}
		}

		$sfarray_check = array();
		foreach ($sfarray as $key => $sfarray_item) {
			if(get_post_meta($this->post_id, strtolower(str_replace(' ', '_', $sfarray_item['name'])), true)) {
				array_push($sfarray_check, '1');
			}
		}

		$more_fact_check = $this->more_fact_check($this->post_id);



		if($ifarray_check || $sfarray_check || $more_fact_check) {
			$html .= '<tr><td width="33.3333333%" valign="top">';
			if($ifarray_check){
				$html .= '<strong>'.__('Individual Facts', 'treepress').'</strong><br>';
				foreach ($ifarray as $key => $ifarray_item) {
					if(get_post_meta($this->post_id, strtolower(str_replace(' ', '_', $ifarray_item['name'])), true)) {
						$html .= $ifarray_item['display'].': '.get_post_meta($this->post_id, strtolower(str_replace(' ', '_', $ifarray_item['name'])), true).'<br>';
					}
				}
			}
			$html .= '</td><td width="33.3333333%" valign="top">';

			if($sfarray_check){
				$html .= '<strong>'.__('Shared Facts', 'treepress').'</strong><br>';
				foreach ($sfarray as $key => $sfarray_item) {
					if(get_post_meta($this->post_id, strtolower(str_replace(' ', '_', $sfarray_item['name'])), true)) {
						$html .= $sfarray_item['display'].': '.get_post_meta($this->post_id, strtolower(str_replace(' ', '_', $sfarray_item['name'])), true).'<br>';
					}
				}
			}
			$html .= '</td><td width="33.3333333%" valign="top">';
			if($more_fact_check){
				$html .= '<strong>'.__('More Facts', 'treepress').'</strong><br>';
				foreach (get_post_meta($this->post_id, 'more_fact_label', true) as $key_m_f => $more_fact) {
					if($more_fact){
						$html .=  get_post_meta($this->post_id, 'more_fact_label', true)[$key_m_f].': '.get_post_meta($this->post_id, 'more_fact_value', true)[$key_m_f].'<br>';
					}
				}
			}
			$html .= '</td></tr>';
		}
		$html .= '</table>';
		return $html;
	}

	function get_toolbar_div() {
		$treepress = new Treepress;

		$plugloc = treepress_plugin_dir_url;

		$terms = wp_get_post_terms($this->post_id, 'family');
		if($terms){
			$term_id = $terms[0]->term_id;
			$ftlink = get_term_meta( $term_id, 'family_tree_link', true);
		} else {
			$ftlink = '';
		}

		if (strpos($ftlink, '?') === false) {
			$ftlink = $ftlink.'?ancestor='.$this->post_id;
		} else {
			$ftlink = $ftlink.'&ancestor='.$this->post_id;
		}
		$permalink = get_permalink($this->post_id);
		$html = '';

		if ($treepress->options->get_option('bShowToolbar') == 'true') {
			$html .= '<div class="toolbar" id="toolbar'.$this->post_id.'">';
			if ($treepress->options->get_option('treepress_toolbar_blogpage') == 'true') {
				$html .= '<a class="toolbar-blogpage" href="'.$permalink.'" title="View information about '.htmlspecialchars($this->name).'">
				<img border="0" class="toolbar-blogpage" src="'.$plugloc.'public/imgs/open-book.png">
				</a>';
			}
			if ($treepress->options->get_option('treepress_toolbar_treenav') == 'true') {
				$html .= '<a class="toolbar-treenav" href="'.$ftlink.'" title="View the family of '.htmlspecialchars($this->name).'">
				<img width="13" border="0" class="toolbar-treenav" src="'.$plugloc.'public/imgs/tree.gif">
				</a>';
			}
			$html .= '</div>';
		}
		return $html;
	}

	function get_thumbnail_div() {
		$plugloc = treepress_plugin_dir_url;

		$html = '';
		$html .= '<div class="treepress_thumbnail" id="thumbnail'.$this->post_id.'">';
		if (!empty($this->thumbsrc)) {
			$html .= '<img src="'.$this->thumbsrc.'">';
		} else {
			$html .= '<img style="width:50px;" src="'.$plugloc.'public/imgs/no-avatar.png">';
		}
		$html .= '</div>';

		return $html;
	}


	function get_box_html($the_family) {
		$html = '';
		$html .= '<a href="'.$this->url.'">'.$this->name.'</a>';
		$html .= '<br>Born: '.$this->born;
		if (!empty($this->died) && strlen($this->died) > 1) {
			$html .= '<br>Died: '.	$this->died;
		}
		return $html;
	}
}
