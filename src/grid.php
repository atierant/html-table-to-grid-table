<?php
class Grid
{
    public static function process($data)
    {
        $output = new ezcConsoleOutput();

        $output->formats->headBorder->color   = 'blue';
        $output->formats->normalBorder->color = 'gray';
        $output->formats->headContent->color  = 'blue';
        $output->formats->headContent->style  = array( 'bold' );

        $table = new ezcConsoleTable( $output, 78 );

        $table->options->defaultBorderFormat = 'normalBorder';

        $table[0]->borderFormat = 'headBorder';
        $table[0]->format       = 'headContent';
        $table[0]->align        = ezcConsoleTable::ALIGN_CENTER;

        foreach ( $data as $row => $cells )
        {
            foreach ( $cells as $cell )
            {
                $table[$row][]->content = $cell;
            }
        }

        $output->outputLine( 'eZ components team:' );
        $table->outputTable();
        $output->outputLine();
    }
}
