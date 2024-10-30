<?php
    if ( !defined( 'ABSPATH' ) ) exit;

    if ((get_option("lestvica_last_update")  + $instance["update_rate"] < time()) || get_option("lestvica_last_update") == 0) {
        $lestvica = LestvicaData($instance["url"]);
        update_option("lestvica_last_update",time());
        update_option("lestvica_data",$lestvica);
    } else {
        $lestvica = get_option("lestvica_data");
    }
    
?>
    <table>
        <thead style="<?php echo $instance["table_header_style"];?>">
            <tr align="center">
                <td style="padding: 10px;"> Mesto </td>
                <td style="padding: 10px;"> Ime ekipe </td>
                <td style="padding: 10px;"> Št. tekem</td>
                <td style="padding: 10px;"> Št. točk</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($lestvica as $ekipa):?>
            <?php if($ekipa->ime == $instance["highlighted_team"]) {
                echo '<tr align="center" style="background-color: ' . $instance["highlight_color"] . '">';
            } else {
                echo '<tr align="center">';
            }
            ?>
                <td><?php echo $ekipa->mesto;?></td>
                <td><?php echo $ekipa->ime;?></td>
                <td><?php echo $ekipa->tekme;?></td>
                <td><?php echo $ekipa->tocke;?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>