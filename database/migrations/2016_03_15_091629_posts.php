<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Posts
 *
 * @author  The scaffold-interface created at 2016-03-15 09:16:29pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('posts',function (Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->string('slug');
        $table->text('description');
        $table->string('image');
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade'); 
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
        Schema::drop('posts');
     }
}
