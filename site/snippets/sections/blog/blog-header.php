<?php
// Fetch the three most recent posts
$recentPosts = $page->children()->listed()->limit(3);
?>

<div class="px-24 py-16 bg-empaiBlack">
  <div class="grid grid-cols-2 mx-auto max-w-7xl">
    <div class="flex flex-col justify-center space-y-4">
      <div class="flex space-x-2">
        <!-- Display the category of the first post -->
        <span class="font-bold text-sm bg-[#587B44] px-3 py-2 text-white rounded capitalize">
          <?= $recentPosts->first()->category() ?>
        </span>
      </div>
      <!-- Display the title of the first post -->
      <h2 class="pr-8 text-5xl text-white font-goldman line-clamp-3">
        <?= $recentPosts->first()->title() ?>
      </h2>
      <!-- Read more link -->
      <a href="<?= $recentPosts->first()->url() ?>" class="font-semibold text-primary hover:underline">
        <?= t("blog.readmore") ?> →
      </a>
      <!-- Bullet points -->
      <div class="flex pt-4 space-x-4" id="post-bullets">
        <?php
        $counter = 0; // Initialize a counter
        foreach ($recentPosts as $post): ?>
          <?php
          $bulletClass = ($counter === 0) ? 'bg-primary' : 'bg-gray-500';
          ?>
          <span
            class="w-4 h-4 rounded-full cursor-pointer <?php echo $bulletClass; ?>"
            data-index="<?php echo $counter; ?>"></span>
        <?php
          $counter++; // Increment the counter
        endforeach; ?>
      </div>
    </div>
    <!-- Display the image of the first post -->
    <div class="flex items-center justify-center max-h-[300px] ">
      <img class="object-cover w-full h-full rounded"
        id="post-image"
        src="<?= $recentPosts->first()->images()->first()->url() ?>"
        alt="<?= $recentPosts->first()->title() ?>">
    </div>
  </div>
</div>

<!-- Hidden data for JavaScript -->
<div id="posts-data" class="hidden">
  <?php
  $counter = 0; // Initialize a counter
  foreach ($recentPosts as $post): ?>
    <div
      data-index="<?php echo $counter; ?>"
      data-category="<?php echo $post->category(); ?>"
      data-title="<?php echo $post->title(); ?>"
      data-image="<?php echo $post->images()->first()->url(); ?>"
      data-url="<?php echo $post->url(); ?>"></div>
  <?php
    $counter++; // Increment the counter
  endforeach; ?>
</div>