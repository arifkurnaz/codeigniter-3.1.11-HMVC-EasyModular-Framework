<div class="row">
   
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <? if (count($links)>0) : foreach ($links as  $value) :  ?>
                           
                            <li class="breadcrumb-item <?=$value['link'] ==end($this->uri->segments) ? 'active' : ''; ?>"><a href="<?= $value['link'] ?>"><?= $value['title'] ?></a></li>
                          
                    <? endforeach;
                    endif; ?>
                </ol>
            </div>
            <h4 class="page-title"><?= isset($page)?$page:null ?></h4>
        </div>
    </div>
</div>