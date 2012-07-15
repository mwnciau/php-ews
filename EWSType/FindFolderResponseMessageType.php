<?php
/**
 * Definition of the FindFolderResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindFolderResponseMessageType type
 */
class EWSType_FindFolderResponseMessageType extends EWSType
{
    /**
     * RootFolder property
     *
     * @var EWSType_FindFolderParentType
     */
    public $RootFolder;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RootFolder',
                'required' => false,
                'type' => 'FindFolderParentType',
            ),
        );
    }
}
