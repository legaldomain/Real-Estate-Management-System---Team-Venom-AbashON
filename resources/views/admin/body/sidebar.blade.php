<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          ABASH<span>ON</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('admin.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.allagent') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">All Agent</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.addagent') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Add Agent</span>
            </a>
          </li>
          
          <li class="nav-item nav-category">ABASHON:Real Estate</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Categories</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.type')}}" class="nav-link">All Property Type</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.html" class="nav-link">Add Property Type</a>
                </li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#state" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">State Areas</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="state">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.state')}}" class="nav-link">All States Areas</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.state') }}" class="nav-link">Add States Areas</a>
                </li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#facility" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Facilities</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="facility">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('all.facility')}}" class="nav-link">All Facility</a>
                </li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Property </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="property">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.property') }}" class="nav-link">All Property</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.property') }}" class="nav-link">Add Property</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a href="https://www.timeanddate.com/calendar/" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">UI Kit</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                </li> -->
                <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blogcategory" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Blog Catagory</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="blogcategory">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.blog.category') }}" class="nav-link">All Blog Category</a>
                </li>

              </ul>



            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Post" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Blog Post</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="Post">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.post') }}" class="nav-link">All POST</a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('add.post') }}" class="nav-link">Add Post</a>
                </li>

                

              
          


    
          
          
        </ul>
      </div>
    </nav>
    