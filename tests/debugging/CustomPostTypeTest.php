<?php
/**
 * Custom Post Type Tests
 * 
 * Tests for custom post type registration and configuration
 */

namespace FCPTheme\Tests\Debugging;

use PHPUnit\Framework\TestCase;

class CustomPostTypeTest extends TestCase
{
    /**
     * Test that faculty CPT is registered
     */
    public function test_faculty_cpt_registered()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $this->assertTrue(
            post_type_exists('faculty'),
            'Faculty custom post type is not registered'
        );
    }

    /**
     * Test that program CPT is registered
     */
    public function test_program_cpt_registered()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $this->assertTrue(
            post_type_exists('program'),
            'Program custom post type is not registered'
        );
    }

    /**
     * Test that schedule CPT is registered
     */
    public function test_schedule_cpt_registered()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $this->assertTrue(
            post_type_exists('schedule'),
            'Schedule custom post type is not registered'
        );
    }

    /**
     * Test that faculty CPT has correct settings
     */
    public function test_faculty_cpt_settings()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $cpt = get_post_type_object('faculty');

        $this->assertNotNull($cpt, 'Faculty CPT object is null');
        $this->assertTrue($cpt->public, 'Faculty CPT should be public');
        $this->assertTrue($cpt->has_archive, 'Faculty CPT should have archive');
        $this->assertTrue($cpt->show_in_rest, 'Faculty CPT should be in REST API');
    }

    /**
     * Test that program CPT has correct settings
     */
    public function test_program_cpt_settings()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $cpt = get_post_type_object('program');

        $this->assertNotNull($cpt, 'Program CPT object is null');
        $this->assertTrue($cpt->public, 'Program CPT should be public');
        $this->assertTrue($cpt->has_archive, 'Program CPT should have archive');
        $this->assertTrue($cpt->show_in_rest, 'Program CPT should be in REST API');
    }

    /**
     * Test that schedule CPT has correct settings
     */
    public function test_schedule_cpt_settings()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $cpt = get_post_type_object('schedule');

        $this->assertNotNull($cpt, 'Schedule CPT object is null');
        $this->assertTrue($cpt->public, 'Schedule CPT should be public');
        $this->assertTrue($cpt->has_archive, 'Schedule CPT should have archive');
        $this->assertTrue($cpt->show_in_rest, 'Schedule CPT should be in REST API');
    }

    /**
     * Test that faculty CPT supports required features
     */
    public function test_faculty_cpt_supports()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $this->assertTrue(
            post_type_supports('faculty', 'title'),
            'Faculty CPT should support title'
        );
        $this->assertTrue(
            post_type_supports('faculty', 'editor'),
            'Faculty CPT should support editor'
        );
        $this->assertTrue(
            post_type_supports('faculty', 'thumbnail'),
            'Faculty CPT should support thumbnail'
        );
    }

    /**
     * Test that program CPT supports required features
     */
    public function test_program_cpt_supports()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $this->assertTrue(
            post_type_supports('program', 'title'),
            'Program CPT should support title'
        );
        $this->assertTrue(
            post_type_supports('program', 'editor'),
            'Program CPT should support editor'
        );
        $this->assertTrue(
            post_type_supports('program', 'thumbnail'),
            'Program CPT should support thumbnail'
        );
    }

    /**
     * Test that schedule CPT supports required features
     */
    public function test_schedule_cpt_supports()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $this->assertTrue(
            post_type_supports('schedule', 'title'),
            'Schedule CPT should support title'
        );
        $this->assertTrue(
            post_type_supports('schedule', 'editor'),
            'Schedule CPT should support editor'
        );
        $this->assertTrue(
            post_type_supports('schedule', 'custom-fields'),
            'Schedule CPT should support custom-fields'
        );
    }

    /**
     * Test that CPT labels are properly set
     */
    public function test_cpt_labels_exist()
    {
        // CPTs are registered via bootstrap.php calling do_action('init')

        $cpts = ['faculty', 'program', 'schedule'];

        foreach ($cpts as $cpt_slug) {
            $cpt = get_post_type_object($cpt_slug);

            $this->assertNotNull($cpt, "{$cpt_slug} CPT object is null");
            $this->assertNotEmpty($cpt->labels->name, "{$cpt_slug} should have name label");
            $this->assertNotEmpty($cpt->labels->singular_name, "{$cpt_slug} should have singular_name label");
        }
    }
}
