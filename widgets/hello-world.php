<?php
namespace HelloWorld\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Hello_World extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'hello-world';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Table of Contents', 'hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-th-list';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general-elements' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'hello-world' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		
		$this->start_controls_section(
			'section_headings',
			[
				'label' => __( 'Headings', 'hello-world' ),
			]
		);
		
		$this->add_control(
			'header_label',
			[
				'label' => __( 'Header Label', 'hello-world' ),
				'description' => __( 'Use to override the defailt label set in main ETOC settings', 'hello-world' ),
				'type' => Controls_Manager::TEXT,
			]
		);
		
		$this->add_control(
			'show_h1',
			[
				'label' => __( 'Heading 1 (h1)', 'hello-world' ),
				'type' => \Elementor\Controls_Manager::CHECKBOX,
				'default' => '',
			]
		);
		$this->add_control(
			'show_h2',
			[
				'label' => __( 'Heading 2 (h2)', 'hello-world' ),
				'type' => \Elementor\Controls_Manager::CHECKBOX,
				'default' => 'on',
				'separator' => 'none',
			]
		);
		$this->add_control(
			'show_h3',
			[
				'label' => __( 'Heading 3 (h3)', 'hello-world' ),
				'type' => \Elementor\Controls_Manager::CHECKBOX,
				'default' => 'on',
				'separator' => 'none',
			]
		);
		$this->add_control(
			'show_h4',
			[
				'label' => __( 'Heading 4 (h4)', 'hello-world' ),
				'type' => \Elementor\Controls_Manager::CHECKBOX,
				'default' => 'on',
				'separator' => 'none',
			]
		);
		$this->add_control(
			'show_h5',
			[
				'label' => __( 'Heading 5 (h5)', 'hello-world' ),
				'type' => \Elementor\Controls_Manager::CHECKBOX,
				'default' => 'on',
				'separator' => 'none',
			]
		);
		$this->add_control(
			'show_h6',
			[
				'label' => __( 'Heading 6 (h6)', 'hello-world' ),
				'type' => \Elementor\Controls_Manager::CHECKBOX,
				'default' => 'on',
				'separator' => 'none',
				'description' => __('Select the heading to consider when generating the table of contents. Deselecting a heading will exclude it.', 'hello-world'),
			]
		);
		
		$this->add_control(
			'alternative_headings',
			[
				'label' => __( 'Alternate Headings', 'hello-world' ),
				'description' => __( 'Specify alternate table of contents header string. Add the header to be replaced and the alternate header on a single line separated with a pipe |. Put each additional original and alternate header on its own line.', 'hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter alternate headings', 'hello-world' ),
				'rows' => 10,
			]
		);
		
		$this->add_control(
			'exclude_headings',
			[
				'label' => __( 'Exclude Headings', 'hello-world' ),
				'description' => __( 'Specify headings to be excluded from appearing in the table of contents. Separate multiple headings with a pipe |. Use an asterisk * as a wildcard to match other text.', 'hello-world' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter headings to exclude', 'hello-world' ),
				'rows' => 10,
			]
		);
		
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'hello-world' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'hello-world' ),
				'type' => Controls_Manager::TEXT,
			]
		);
		

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'hello-world' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'hello-world' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'hello-world' ),
					'uppercase' => __( 'UPPERCASE', 'hello-world' ),
					'lowercase' => __( 'lowercase', 'hello-world' ),
					'capitalize' => __( 'Capitalize', 'hello-world' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();

		echo '<div class="title">';
		echo $settings['title'];
		echo '</div>';
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		?>
		<div class="title">
			{{{ settings.title }}}
		</div>
		<?php
	}
}
