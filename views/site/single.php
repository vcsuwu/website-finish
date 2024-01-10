<?php
use yii\helpers\Url;
use app\models\Tag;
?>


<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="#"><?=$article->category->title;?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?=$article->title;?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content; ?>
                        </div>
                        <div class="decoration">
                            <?php foreach($tags as $tag): ?>
                                <a href="#" class="btn btn-default"><?= Tag::findOne($tag)->title;?></a>
                            <?php endforeach; ?>
                        </div>

                        <div class="social-share">
							<span
                                    class="social-share-title pull-left text-capitalize">By Rubel On <?= $article->getDate(); ?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <div class="bottom-comment"><!--bottom comment-->
                    <h4>3 comments</h4>

                    <div class="comment-img">
                        <img class="img-circle" src="../public/images/comment-img.jpg" alt="">
                    </div>

                    <div class="comment-text">
                        <a href="#" class="replay btn pull-right"> Replay</a>
                        <h5>Rubel Miah</h5>

                        <p class="comment-date">
                            December, 02, 2015 at 5:57 PM
                        </p>


                        <p class="para">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et cusam et justo duo dolores et ea rebum.</p>
                    </div>
                </div>
                <!-- end bottom comment-->


                <div class="leave-comment"><!--leave comment-->
                    <h4>Leave a reply</h4>


                    <form class="form-horizontal contact-form" role="form" method="post" action="#">
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Website url">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
										<textarea class="form-control" rows="6" name="message"
                                                  placeholder="Write Massage"></textarea>
                            </div>
                        </div>
                        <a href="#" class="btn send-btn">Post Comment</a>
                    </form>
                </div><!--end leave comment-->
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="../public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                        <div class="popular-post">

                            <a href="#" class="popular-img"><img src="../public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="../public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <div class="thumb-latest-posts">

                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Food & Drinks</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Travel</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Business</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Story</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">DIY & Tips</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>