
<div class="container-fluid" style="background: repeat ; background-image:url('<?php echo site_url('assets/gencss/images/blurb1.jpg') ?>');">
 
    <?php
    echo $this->load->view('components/slider');
    ?> 

</div>
<div class="container-fluid">
    <div class="row">

        <?php
//        echo $this->load->view('components/search');
        ?> 
    </div>
    <div class="row">
        <?php
        echo $this->load->view('components/reason');
        ?>                                                              
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="col-md-12">
                <div class="page-header">
                    <h3>Upcoming Project</h3>
                </div>
                <?php
                echo $this->load->view('components/upcoming');
                ?>                                                               
            </div>
            <div class="col-md-12">
                <div class="page-header">
                    <h4>social media</h4>
                </div>
                <img class="img-responsive" src="<?php echo site_url('assets/ebonyimages/social.png') ?>">
            </div>
        </div>

        <div class="col-md-9">
            <div class="page-header">
                <h1 class="">Featured Properties</h1>
            </div>
            <div class="col-md-12">
                <?php
                echo($this->load->view('template/components/listing', TRUE))
                ?>
            </div>
            <div class="col-md-12">
                <?php
                echo $this->load->view('components/news');
                ?>                                                             
            </div>
        </div>


    </div>

</div>
</div>

