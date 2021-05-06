<?php

namespace app\strtob\cropupload;

/**
 * This is just an example.
 */
class cropuploadWidget extends \yii\base\Widget
{
    public $uploadParameter = [];
    
    public $width = 200;
    
    public $height = 200;
    
    public $label = '';
    
    public $noPhotoImage = '';
    
    public $maxSize = 2097152;
    
    public $thumbnailWidth = 300;
    
    public $thumbnailHeight = 300;
    
    public $cropAreaWidth = 300;
    
    public $cropAreaHeight = 300;
    
    public $extensions = 'jpeg, jpg, png, gif';
    
    public $onCompleteJcrop;
    
    public $pluginOptions = [];
    
    public $aspectRatio = null;
    
    
    
    public function init()
    {
        parent::init();
        
        if ($this->uploadParameter === null) {
            throw new InvalidConfigException(Yii::t('crop', 'MISSING_ATTRIBUTE', ['attribute' => 'uploadParameter']));
        } else {
            $this->uploadParameter = rtrim(Yii::getAlias($this->uploadParameter), '/') . '/';
        }

        if ($this->label == '') {
            $this->label = Yii::t('cropper', 'DEFAULT_LABEL');
        }
    }
    
    
    public function run()
    {
        
    }

    
    
    
}
