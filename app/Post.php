<?php
namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostController
 *
 * @author  The scaffold-interface created at 2016-03-15 09:16:29pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Post extends Model
{

    public $timestamps = false;

    protected $table = 'posts';

public function category()
{
	return $this->belongsTo('App\Category');
}
	
}
