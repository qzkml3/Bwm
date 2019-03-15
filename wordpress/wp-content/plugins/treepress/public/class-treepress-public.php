<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wordpress.org/plugins/treepress
 * @since      1.0.0
 *
 * @package    Treepress
 * @subpackage Treepress/public
 */
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Treepress
 * @subpackage Treepress/public
 * @author     Md Kabir Uddin <bd.kabiruddin@gmail.com>
 */
class Treepress_Public
{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private  $plugin_name ;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private  $version ;
    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version )
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }
    
    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Treepress_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Treepress_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style(
            $this->plugin_name,
            plugin_dir_url( __FILE__ ) . 'css/treepress-public.css',
            array(),
            $this->version,
            'all'
        );
        wp_enqueue_style(
            $this->plugin_name . '-styles',
            plugin_dir_url( __FILE__ ) . 'css/styles.css',
            array(),
            $this->version,
            'all'
        );
    }
    
    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Treepress_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Treepress_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_script(
            $this->plugin_name . '-raphael',
            plugin_dir_url( __FILE__ ) . 'js/raphael.js',
            array( 'jquery' ),
            $this->version,
            false
        );
        wp_enqueue_script(
            $this->plugin_name . '-public',
            plugin_dir_url( __FILE__ ) . 'js/treepress-public.js',
            array( 'jquery' ),
            $this->version,
            false
        );
        wp_enqueue_script(
            $this->plugin_name . '-panzoom',
            'https://unpkg.com/panzoom@7.1.2/dist/panzoom.min.js',
            array( 'jquery' ),
            $this->version,
            false
        );
    }
    
    /* Render a list of nodes. */
    public function treepress_family_list( $family = '' )
    {
        $treepress = new Treepress();
        $the_family_all = $treepress->tree->get_tree( $family );
        $the_family = array_chunk( $the_family_all, 200, true )[0];
        $html = "";
        foreach ( $the_family as $fm ) {
            $html .= $fm->get_html( $the_family );
            $html .= '<hr>';
        }
        return $html;
    }
    
    /* Render the tree. */
    public function treepress_family_tree( $root = '', $family = '' )
    {
        $treepress = new Treepress();
        $the_family_all = $treepress->tree->get_tree( $family );
        $the_family = array_chunk( $the_family_all, 200, true )[0];
        $out = '';
        $ancestor = '';
        
        if ( !empty($_GET['ancestor']) ) {
            $ancestor = $_GET['ancestor'];
        } else {
            
            if ( !empty($root) ) {
                $ancestor = $root;
            } else {
                $node = reset( $the_family );
                $ancestor = ( $node !== false ? $node->post_id : '-1' );
            }
        
        }
        
        if ( !is_numeric( $ancestor ) ) {
            $ancestor = $treepress->tree->get_id_by_name( $ancestor, $the_family );
        }
        $render_from_parent = true;
        
        if ( $render_from_parent ) {
            $node = $treepress->tree->get_node_by_id( $ancestor, $the_family );
            
            if ( !empty($node->father) ) {
                $ancestor = $node->father;
            } else {
                if ( !empty($node->mother) ) {
                    $ancestor = $node->mother;
                }
            }
        
        }
        
        $out .= "<script type='text/javascript'>";
        $tree_data_js = "var tree_txt = new Array(\n";
        $the_family_all = $treepress->tree->get_tree( $family );
        $the_family = array_chunk( $the_family_all, 200, true )[0];
        $first = true;
        foreach ( $the_family as $node ) {
            
            if ( !$first ) {
                $tree_data_js .= ',' . "\n";
            } else {
                $first = false;
            }
            
            $str = '"EsscottiFTID=' . $node->post_id . '",' . "\n";
            $str .= '"Name=' . addslashes( $node->name ) . '",' . "\n";
            
            if ( $node->gender == 'm' ) {
                $str .= '"Male",' . "\n";
            } else {
                if ( $node->gender == 'f' ) {
                    $str .= '"Female",' . "\n";
                }
            }
            
            $str .= '"Birthday=' . $node->born . '",' . "\n";
            if ( !empty($node->died) && $node->died != '-' ) {
                $str .= '"Deathday=' . $node->died . '",' . "\n";
            }
            if ( isset( $node->partners ) && is_array( $node->partners ) ) {
                foreach ( $node->partners as $partner ) {
                    if ( is_numeric( $partner ) ) {
                        if ( isset( $the_family[$partner] ) ) {
                            $str .= '"Spouse=' . $the_family[$partner]->post_id . '",' . "\n";
                        }
                    }
                }
            }
            $str .= '"Toolbar=toolbar' . $node->post_id . '",' . "\n";
            $str .= '"Thumbnaildiv=thumbnail' . $node->post_id . '",' . "\n";
            $mother_id = null;
            $father_id = null;
            if ( $node->mother && isset( $the_family[$node->mother] ) ) {
                $mother_id = $the_family[$node->mother]->post_id;
            }
            if ( $node->father && isset( $the_family[$node->father] ) ) {
                $father_id = $the_family[$node->father]->post_id;
            }
            $str .= '"Parent=' . $mother_id . '",' . "\n";
            $str .= '"Parent=' . $father_id . '"';
            $tree_data_js .= $str;
        }
        $tree_data_js .= ');' . "\n";
        $out .= $tree_data_js;
        $out .= 'BOX_LINE_Y_SIZE = "' . $treepress->options->get_option( 'generationheight' ) . '";' . "\n";
        $out .= 'canvasbgcol = "' . $treepress->options->get_option( 'canvasbgcol' ) . '";' . "\n";
        $out .= 'nodeoutlinecol = "' . $treepress->options->get_option( 'nodeoutlinecol' ) . '";' . "\n";
        $out .= 'nodefillcol	= "' . $treepress->options->get_option( 'nodefillcol' ) . '";' . "\n";
        $out .= 'nodefillopacity = ' . $treepress->options->get_option( 'nodefillopacity' ) . ';' . "\n";
        $out .= 'nodetextcolour = "' . $treepress->options->get_option( 'nodetextcolour' ) . '";' . "\n";
        $out .= 'setOneNamePerLine(' . $treepress->options->get_option( 'bOneNamePerLine' ) . ');' . "\n";
        $out .= 'setOnlyFirstName(' . $treepress->options->get_option( 'bOnlyFirstName' ) . ');' . "\n";
        $out .= 'setBirthAndDeathDates(' . $treepress->options->get_option( 'bBirthAndDeathDates' ) . ');' . "\n";
        $out .= 'setBirthAndDeathDatesOnlyYear(' . $treepress->options->get_option( 'bBirthAndDeathDatesOnlyYear' ) . ');' . "\n";
        $out .= 'setBirthDatePrefix("' . $treepress->options->get_option( 'bBirthDatePrefix' ) . '");' . "\n";
        $out .= 'setDeathDatePrefix("' . $treepress->options->get_option( 'bDeathDatePrefix' ) . '");' . "\n";
        $out .= 'setConcealLivingDates(' . $treepress->options->get_option( 'bConcealLivingDates' ) . ');' . "\n";
        $out .= 'setShowSpouse(' . $treepress->options->get_option( 'bShowSpouse' ) . ');' . "\n";
        $out .= 'setShowOneSpouse(' . $treepress->options->get_option( 'bShowOneSpouse' ) . ');' . "\n";
        $out .= 'setVerticalSpouses(' . $treepress->options->get_option( 'bVerticalSpouses' ) . ');' . "\n";
        $out .= 'setMaidenName(' . $treepress->options->get_option( 'bMaidenName' ) . ');' . "\n";
        $out .= 'setShowGender(' . $treepress->options->get_option( 'bShowGender' ) . ');' . "\n";
        $out .= 'setDiagonalConnections(' . $treepress->options->get_option( 'bDiagonalConnections' ) . ');' . "\n";
        $out .= 'setRefocusOnClick(' . $treepress->options->get_option( 'bRefocusOnClick' ) . ');' . "\n";
        $out .= 'setShowToolbar(' . $treepress->options->get_option( 'bShowToolbar' ) . ');' . "\n";
        $out .= 'setNodeRounding(' . $treepress->options->get_option( 'nodecornerradius' ) . ');' . "\n";
        
        if ( $treepress->options->get_option( 'bShowToolbar' ) == 'true' ) {
            $out .= 'setToolbarYPad(20);' . "\n";
        } else {
            $out .= 'setToolbarYPad(0);' . "\n";
        }
        
        $out .= 'setToolbarPos(true, 3, 3);' . "\n";
        $out .= 'setMinBoxWidth(' . $treepress->options->get_option( 'nodeminwidth' ) . ');' . "\n";
        $out .= 'jQuery(document).ready(function($){' . "\n";
        $out .= '	familytreemain();' . "\n";
        $out .= '	var scene = document.getElementById(\'tree-container\');' . "\n";
        $out .= '	panzoom(scene);' . "\n";
        $out .= '});' . "\n";
        $out .= '</script>';
        $out .= '<input type="hidden" size="30" name="focusperson" id="focusperson" value="' . $ancestor . '">' . "\n";
        $out .= '<div id="borderBox" style="background-color:' . $treepress->options->get_option( 'canvasbgcol' ) . '">' . "\n";
        $out .= '<div id="dragableElement">';
        $out .= '<div id="tree-container">' . "\n";
        $out .= '<div id="toolbar-container">' . "\n";
        foreach ( $the_family as $node ) {
            $out .= $node->get_toolbar_div();
        }
        $out .= '</div>' . "\n";
        $out .= '<div id="thumbnail-container">' . "\n";
        foreach ( $the_family as $node ) {
            $out .= $node->get_thumbnail_div();
        }
        $out .= '</div>' . "\n";
        $out .= '<div id="familytree" style="background-color:' . $treepress->options->get_option( 'canvasbgcol' ) . '"></div>' . "\n";
        $out .= '<img name="hoverimage" id="hoverimage" style="visibility:hidden;" >' . "\n";
        $out .= '</div>' . "\n";
        $out .= '</div>' . "\n";
        $out .= '</div>' . "\n";
        if ( $treepress->options->get_option( 'showcreditlink' ) == 'true' ) {
            $out .= '<p style="text-align:left"><small>Powered by <a target="_blank" href="http://www.treepress.net">TreePress</a></small></p>' . "\n";
        }
        return $out;
    }
    
    public function treepress_family_list_insert( $content )
    {
        
        if ( preg_match( '{FAMILY-MEMBERS}', $content ) ) {
            $ft_output = $this->treepress_family_list();
            $content = str_replace( '{FAMILY-MEMBERS}', $ft_output, $content );
        }
        
        return $content;
    }
    
    public function treepress_insert( $content )
    {
        
        if ( preg_match( '{FAMILY-TREE}', $content ) ) {
            $ft_output = $this->treepress_family_tree();
            $content = str_replace( '{FAMILY-TREE}', $ft_output, $content );
        }
        
        return $content;
    }
    
    public function bio_data_insert_in_single_page( $content )
    {
        global  $post ;
        $get_family_id = '';
        $get_family_ids = wp_get_post_terms( $post->ID, 'family', array() );
        if ( $get_family_ids ) {
            $get_family_id = $get_family_ids[0]->term_id;
        }
        $treepress = new Treepress();
        $the_family = $treepress->tree->get_tree( $get_family_id );
        
        if ( isset( $the_family[$post->ID] ) ) {
            $html = $the_family[$post->ID]->get_html( $the_family );
            $content = $html . $content;
        }
        
        return $content;
    }
    
    public function treepress_treepress_shortcode( $atts, $content = NULL )
    {
        $treepress = new Treepress();
        
        if ( is_array( $atts ) && array_key_exists( 'root', $atts ) ) {
            $root = $atts['root'];
        } else {
            $root = '';
        }
        
        
        if ( is_array( $atts ) && array_key_exists( 'family', $atts ) ) {
            $family = $atts['family'];
        } else {
            $family = '';
        }
        
        $ft_output = $this->treepress_family_tree( $root, $family );
        return $ft_output;
    }
    
    public function treepress_family_members_shortcode( $atts, $content = NULL )
    {
        $treepress = new Treepress();
        
        if ( is_array( $atts ) && array_key_exists( 'root', $atts ) ) {
            $root = $atts['root'];
        } else {
            $root = '';
        }
        
        
        if ( is_array( $atts ) && array_key_exists( 'family', $atts ) ) {
            $family = $atts['family'];
        } else {
            $family = '';
        }
        
        $ft_output = $this->treepress_family_list( $family );
        return $ft_output;
    }

}