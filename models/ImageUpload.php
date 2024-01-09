<?php

namespace app\models;

use yii\web\UploadedFile;
use yii\base\Model;
use Yii;

class ImageUpload extends Model
{
    public $image;

    public function rules() 
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png']
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {

        $this->image = $file;

        if ($this->validate()) 
        {

            $this->deleteCurrentImage($currentImage);

            $filename = $this->genHashName($file);
            $file->saveAs($this->getFolder() . $filename);

            return $filename;
        }
    }

    public function getFolder() {
        return Yii::getAlias('@web') . 'uploads/';
    }

    public function genHashName($file)
    {
        return strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);
    }

    public function deleteCurrentImage($currentImage) 
    {
        if($this->fileExists($currentImage))
        {
            unlink($this->getFolder() . $currentImage);
        }
    }

    public function fileExists($currentImage) {
        if (!empty($currentImage) && $currentImage != null )
        {
            return file_exists($this->getFolder() . $currentImage);
        }
    }
}