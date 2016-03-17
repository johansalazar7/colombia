<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Categories
 *
 * @author  The scaffold-interface created at 2016-03-15 09:12:16pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('categories',function (Blueprint $table){

        $table->increments('id');
        $table->string('name');
        $table->string('slug');
        $table->text('description');
        $table->timestamps();
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('categories');
     }
}
