<?php
namespace App\Modules\Content;

use App\Models\Carousel;
use App\Models\WebsiteContent;

class ContentRepository
{
    public function findById($id)
    {
        return WebsiteContent::find($id);
    }

    public function saveContent($data)
    {
        $website_content = WebsiteContent::find(1);

        if (empty($website_content))
        {
            $website_content = new WebsiteContent();
        }

        $website_content->whatis = !empty($data['whatis']) ? $data['whatis'] : $website_content->whatis;
        $website_content->bornreason = !empty($data['bornreason']) ? $data['bornreason'] : $website_content->bornreason;
        $website_content->vision = !empty($data['vision']) ? $data['vision'] : $website_content->vision;
        $website_content->strength = !empty($data['strengh']) ? $data['strength'] : $website_content->strength;

        $website_content->enable_video =  isset($data['enable_video']) ? $data['enable_video'] : $website_content->enable_video;
        $website_content->youtube_link =  !empty($data['youtube_link']) ? $data['youtube_link'] : $website_content->youtube_link;
        $website_content->youtube_title =  !empty($data['youtube_title']) ? $data['youtube_title'] : $website_content->youtube_title;
        $website_content->youtube_subtitle =  !empty($data['youtube_subtitle']) ? $data['youtube_subtitle'] : $website_content->youtube_subtitle;


        if (!$website_content->save())
        {
            return false;
        }

        return $website_content;
    }

    public function getAllCarousel()
    {
        $carousels = Carousel::all();

        if ($carousels->count() == 0) {
            $this->initCarouselData();
        }

        return Carousel::all();
    }

    public function findCarouselById($id)
    {
        return Carousel::find($id);
    }

    public function initCarouselData()
    {
        for ($i = 0; $i < 5; $i++)
        {
            $carousel = new Carousel();
            $carousel->enable = 0;
            $carousel->save();
        }
    }

    public function updateCarousel($model, array $data)
    {
        $model->title = !empty($data['title']) ? $data['title'] : $model->title;
        $model->subtitle = !empty($data['subtitle']) ? $data['subtitle'] : $model->subtitle;
        $model->image = !empty($data['image']) ? $data['image'] : $model->image;
        $model->thumbnail = !empty($data['thumbnail']) ? $data['thumbnail'] : $model->thumbnail;
        $model->enable = isset($data['enable']) ? $data['enable'] : $model->enable;

        if (!$model->save()) {
            return false;
        }

        return $model;
    }

    public function getClient($client_id)
    {

    }

    public function saveClient($data)
    {

    }

    public function updateClient($model, $data)
    {

    }

    public function deleteClient($client_id)
    {

    }
    
    public function getListClient()
    {

    }
}