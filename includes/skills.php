<section class="skills-section">
  <div class="container-fluid">
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="section-title border-start border-4 border-danger ps-3 mb-3 fw-bold">Skills</h2>
      </div>
    </div>
    
    <!-- 두 열 레이아웃 -->
    <div class="row px-4 pb-5">
      <!-- 왼쪽 열 -->
      <div class="col-md-6">
        <!-- Backend -->
        <div class="skill-group mb-4">
          <h3 class="skill-category">Backend</h3>
          <div class="skill-list">
            <?php foreach ($skill_categories['Backend'] as $skill): ?>
              <span class="skill-pill"><?php echo $skill['name']; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- RDBMS -->
        <div class="skill-group mb-4">
          <h3 class="skill-category">RDBMS</h3>
          <div class="skill-list">
            <?php foreach ($skill_categories['RDBMS'] as $skill): ?>
              <span class="skill-pill"><?php echo $skill['name']; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- DevOps -->
        <div class="skill-group mb-4">
          <h3 class="skill-category">DevOps</h3>
          <div class="skill-list">
            <?php foreach ($skill_categories['DevOps'] as $skill): ?>
              <span class="skill-pill"><?php echo $skill['name']; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      
      <!-- 오른쪽 열 -->
      <div class="col-md-6">
        <!-- Frontend -->
        <div class="skill-group mb-4">
          <h3 class="skill-category">Frontend</h3>
          <div class="skill-list">
            <?php foreach ($skill_categories['Frontend'] as $skill): ?>
              <span class="skill-pill"><?php echo $skill['name']; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- Framework -->
        <div class="skill-group mb-4">
          <h3 class="skill-category">Framework</h3>
          <div class="skill-list">
            <?php foreach ($skill_categories['Framework'] as $skill): ?>
              <span class="skill-pill"><?php echo $skill['name']; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        
        <!-- Server OS -->
        <div class="skill-group mb-4">
          <h3 class="skill-category">Server OS</h3>
          <div class="skill-list">
            <?php foreach ($skill_categories['Server OS'] as $skill): ?>
              <span class="skill-pill"><?php echo $skill['name']; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>