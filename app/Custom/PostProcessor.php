<?php
namespace App\Custom;
use App\Models\User;
use Illuminate\Support\Facades\View;

class PostProcessor {
    public array $featuredImages = [];

    public function do_filter($id, $arr): array
    {
        return array_filter($arr, function ($item) use ($id){
            return ($item->id === $id);
        });
    }

    public function do_image_each($arr): array {
        $arr->each(function ($featuredImg) {
            $this->featuredImages[] = View::make('Svg', ['img' => $featuredImg])->render();
        });

        $returnVal = $this->featuredImages;

        $this->featuredImages = [];

        return $returnVal;
    }

    public function do_reduce($posts, $postSubCategories): array {
        return array_reduce($posts, function (&$carry, $item) use ($postSubCategories) {
            $filterResult = $this->do_filter($item->post_sub_category_id, $postSubCategories);
            $images = $item->getMedia('featured_image');
            $featured_images = null;
            if ($images):
                $featured_images = $this->do_image_each($images);
            endif;
            $carry[] = array(
                "id" => $item->id,
                "author_name" => User::find($item->user_id)->name,
                "post_sub_category" => $filterResult[array_key_first($filterResult)]->toArray(),
                "title" => $item->title,
                "sub_title" => $item->sub_title,
                "slug" => $item->slug,
                "excerpt" => $item->excerpt,
                "description" => $item->description,
                "metadata" => $item->metadata,
                "featured_images" => $featured_images,
                "created_at" => \Carbon\Carbon::parse($item->created_at)->diffForHumans(),
            );

            return $carry;
        }, []);
    }

    public function related_articles($posts, $postSubCategory): array {
        return array_reduce($posts, function (&$carry, $item) use($postSubCategory) {
            $images = $item->getMedia('featured_image');
            $featured_images = null;
            if ($images):
                $featured_images = $this->do_image_each($images);
            endif;
            $carry[] = array(
                "id" => $item->id,
                "author_name" => User::find($item->user_id)->name,
                "post_sub_category" => $postSubCategory->toArray(),
                "title" => $item->title,
                "sub_title" => $item->sub_title,
                "slug" => $item->slug,
                "excerpt" => $item->excerpt,
                "description" => $item->description,
                "metadata" => $item->metadata,
                "featured_images" => $featured_images,
                "created_at" => \Carbon\Carbon::parse($item->created_at)->diffForHumans(),
            );
            return $carry;
        },[]);
    }
}
