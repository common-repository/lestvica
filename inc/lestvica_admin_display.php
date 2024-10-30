<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

    <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">        

        <label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"><?php esc_attr_e( 'Url:', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">

        <label for="<?php echo esc_attr( $this->get_field_id( 'update_rate' ) ); ?>"><?php esc_attr_e( 'Update rate: (in seconds)', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'update_rate' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'update_rate' ) ); ?>" type="text" value="<?php echo esc_attr( $update_rate ); ?>">

        <label for="<?php echo esc_attr( $this->get_field_id( 'last_update' ) ); ?>"><?php esc_attr_e( 'Last update:', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'last_update' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'last_update' ) ); ?>" type="text" value="<?php echo date("Y-m-d H:i:s", $last_update); ?>">

        <label for="<?php echo esc_attr( $this->get_field_id( 'highlighted_team' ) ); ?>"><?php esc_attr_e( 'Highlighted team:', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'highlighted_team' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'highlighted_team' ) ); ?>" type="text" value="<?php echo $highlighted_team; ?>">

        <label for="<?php echo esc_attr( $this->get_field_id( 'highlight_color' ) ); ?>"><?php esc_attr_e( 'Highlight color: (#html or name)', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'highlight_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'highlight_color' ) ); ?>" type="text" value="<?php echo $highlight_color; ?>">

        <label for="<?php echo esc_attr( $this->get_field_id( 'table_header_style' ) ); ?>"><?php esc_attr_e( 'Header style:', 'lestvica' ); ?></label> 
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'table_header_style' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'table_header_style' ) ); ?>" type="text" value="<?php echo $table_header_style; ?>">

    </p>