<<<<<<< HEAD
  <!-- Long Content Scroll Modal -->
  <form action="#" data-route="<?php echo $modalRoute ?>" data-page="<?php echo $modalAction ?>" class="modal-form" method="<?php echo $modalMethod; ?>">
      <div class="modal-header border border-bottom  bg-light p-1">
          <h5 class="modal-title " id="scrollableModalTitle"><?php echo $modalTitle; ?></h5>
          <?php if ($modalButtons['close']) : ?> <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="mdi mdi-close-thick"></i></span></button><?php endif; ?>
      </div>
      <div class="modal-body">
          <?php $this->load->view('pages/' . $modalFolder . '/modals/' . $modalView, $modalData); ?>
      </div>
      <div class="modal-footer border border-top bg-light p-0">
          <div class="pt-0">
              <?php if ($modalButtons['reset']) : ?> <button type="reset" class="btn btn-sm btn-warning"><i class="mdi mdi-broom"></i></button><?php endif; ?>
              <?php if ($modalButtons['submit']) : ?> <button type="submit" class="btn btn-sm btn-secondary"><i class="mdi mdi-content-save-outline"></i></button><?php endif; ?>
          </div>



      </div>
=======
  <!-- Long Content Scroll Modal -->
  <form action="#" data-route="<?php echo $modalRoute ?>" data-page="<?php echo $modalAction ?>" class="modal-form" method="<?php echo $modalMethod; ?>">
      <div class="modal-header border border-bottom  bg-light p-1">
          <h5 class="modal-title " id="scrollableModalTitle"><?php echo $modalTitle; ?></h5>
          <?php if ($modalButtons['close']) : ?> <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="mdi mdi-close-thick"></i></span></button><?php endif; ?>
      </div>
      <div class="modal-body">
          <?php $this->load->view('pages/' . $modalFolder . '/modals/' . $modalView, $modalData); ?>
      </div>
      <div class="modal-footer border border-top bg-light p-0">
          <div class="pt-0">
              <?php if ($modalButtons['reset']) : ?> <button type="reset" class="btn btn-sm btn-warning"><i class="mdi mdi-broom"></i></button><?php endif; ?>
              <?php if ($modalButtons['submit']) : ?> <button type="submit" class="btn btn-sm btn-secondary"><i class="mdi mdi-content-save-outline"></i></button><?php endif; ?>
          </div>



      </div>
>>>>>>> 6f5fb90d5b0dcd3c3badbd365a6e365d33a947aa
  </form>