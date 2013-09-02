<?php

/**
 * BaseCar
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $brand
 * @property integer $ps
 * @property integer $ownerId
 * @property User $Owner
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCar extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('car');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('brand', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('ps', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('ownerId', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User as Owner', array(
             'local' => 'ownerId',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}