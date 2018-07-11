<?php

\Vamshop\Core\Vamshop::hookComponent('Vamshop/Nodes.Nodes', ['FeaturedImage.FeaturedImage' => ['priority' => 5]]);
\Vamshop\Core\Vamshop::hookComponent('Vamshop/Nodes.Admin/Nodes', ['FeaturedImage.FeaturedImage' => ['priority' => 5]]);
\Vamshop\Core\Vamshop::hookBehavior('Vamshop/Nodes.Nodes', 'FeaturedImage.FeaturedImage');
\Vamshop\Core\Vamshop::hookHelper('Vamshop/Nodes.Admin/Nodes', 'Vamshop/Core.Image');
