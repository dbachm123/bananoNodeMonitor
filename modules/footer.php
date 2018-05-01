<footer id="footer">
  <p><?php echo getVersionInformation(); ?><br>
  Source available on <a href="<?php echo PROJECT_URL; ?>" target="_blank">GitHub</a>.</p>

  <p class=small>
  	<br>
  Representative &amp; Donations: <a href="<?php echo getAccountUrl(NODEMON_REP_ACCOUNT, 'banano'); ?>" target="_blank"><?php echo NODEMON_REP_ACCOUNT; ?></a>
  <button id="copyAccount" class="btn btn-sm btn-link btn-clipboard-light" data-clipboard-text="<?php echo NODEMON_REP_ACCOUNT; ?>" title="Copy"><i class="fas fa-clipboard fa-lg"></i></button> 
  </p>


</p>
</footer>

</div><!-- /container -->

<script src="static/js/jquery-3.3.1.min.js"></script>
<script src="static/js/popper.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/handlebars-v4.0.11.js"></script>
<script src="static/js/main.js?v=<?php echo PROJECT_VERSION; ?>"></script>

</body>
</html>