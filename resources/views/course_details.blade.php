@extends('layouts.app')
@section('content')
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Course</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">{{ $course }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Starter Section Section -->
  <section id="starter-section" class="starter-section section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our {{ $course }} courses for kids</h2>
      <p>Empower your child's coding skills</p>
    </div>
    <!-- End Section Title -->
    <div class="container" data-aos="fade-up">
      <!-- Grade Filters -->
      <div class="filter-buttons">
        <button class="filter-btn accent-btn btn-active" data-grade="k-2">{{ $course }} Course</button>
        <!-- <button class="filter-btn accent-btn" data-grade="3-5">Intermediate Level</button>
       <button class="filter-btn accent-btn" data-grade="6-8">Full Course</button> -->
      </div>

      <br />

      <div class="row" id="course-container">
        <!-- Kindergarten Card -->
        <div class="col-md-4">
          <!-- <div class="course-card bg-white p-4">
         <h4 class="text-teal">Beginner Level</h4>
         <p>Common core and ELA aligned KG curriculum</p>
         <p class="key-topics">Learning outcome</p>
         <ul>
          <li>Understand the basics of python programming.</li>
          <li>Learn fundamental programming concepts.</li>
          <li>Develop logical thinking.</li>
          <li>Gain confidence on writing python programs easily.</li>
         </ul>
         <p>Course duration: 6 weeks (2 sessions per week)</p>
         <a href="#" class="view-btn">View Curriculum →</a>
         <span class="price">Course fee: Rs. 5400</span>
        </div> -->
        </div>

        <!-- Grade 1 Card -->
        <div class="col-md-4">
          <!-- <div class="course-card bg-white p-4">
         <h4 class="text-teal">Intermediate Level</h4>
         <p>Common core and ELA aligned Grade 1 curriculum</p>
         <p class="key-topics">🔹 Key Topics</p>
         <ul>
          <li>Reading comprehension</li>
          <li>Creative writing</li>
          <li>Framing introduction</li>
          <li>Introducing the essential parts of speech</li>
         </ul>
         <a href="#" class="view-btn">View Curriculum →</a>
         <span class="price">Starts @$35/class</span>
        </div> -->
        </div>

        <!-- Grade 2 Card -->
        <div class="col-md-4">
          <!-- <div class="course-card bg-white p-4">
         <h4 class="text-teal">Full Course</h4>
         <p>Common core and ELA aligned Grade 2 curriculum</p>
         <p class="key-topics">🔹 Key Topics</p>
         <ul>
          <li>Synonyms in context</li>
          <li>Antonyms in context</li>
          <li>Creative writing</li>
          <li>Delving into parts of speech</li>
         </ul>
         <a href="#" class="view-btn">View Curriculum →</a>
         <span class="price">Starts @$35/class</span>
        </div> -->
        </div>
      </div>
    </div>
  </section>

  <script>
    // Course data for different grade levels
    const courses = {
      "k-2": [{
          title: "Beginner Level",
          desc: "An introductory course to {{ $course }} programming for beginners",
          topics: ["Understand the basics of {{ $course }} programming", "Learn fundamental programming concepts",
            "Develop logical thinking", "Gain confidence in writing {{ $course }} programs easily"
          ],
          course_duration: "Course duration: 6 weeks (2 sessions per week)",
          course_fee: "5400",
        },
        {
          title: "Intermediate Level",
          desc: "An introductory course to {{ $course }} programming for beginners",
          topics: ["Understand and apply oops concepts.", "Read, write and manipulate files.",
            "Sorting and searching od data"
          ],
          course_duration: "Course duration: 8 weeks (2 sessions per week)",
          course_fee: "7200",
        },
        {
          title: "Full Course",
          desc: "An introductory course to {{ $course }} programming for beginners",
          topics: ["Understading different conditional data types in {{ $course }}.",
            "Creating lists, sets, tuples, tables.", "Functions and classes concept.",
            "Modifying and merging files and tables."
          ],
          course_duration: "Course duration: 24 weeks (2 sessions per week)",
          course_fee: "21600",
        },
      ],
      // "3-5": [
      //   { title: "Grade 3", desc: "Advanced reading and writing skills", topics: ["Building strong sentences", "Understanding paragraphs", "Developing short essays", "Introduction to storytelling"] },
      //   { title: "Grade 4", desc: "Mastering English fluency", topics: ["Writing summaries", "Critical reading skills", "Figurative language", "Parts of speech in depth"] },
      //   { title: "Grade 5", desc: "Polishing writing and communication", topics: ["Essay writing", "Grammar refinement", "Writing persuasive arguments", "Analyzing literature"] },
      // ],
      // "6-8": [
      //   { title: "Grade 6", desc: "Advanced literature and composition", topics: ["Comparing texts", "Narrative writing", "Developing thesis statements", "Understanding different writing styles"] },
      //   { title: "Grade 7", desc: "Enhancing communication and debate", topics: ["Persuasive speeches", "Analyzing poetry", "Debate writing", "Structuring essays effectively"] },
      //   { title: "Grade 8", desc: "Preparation for high school English", topics: ["Formal writing techniques", "Creative and analytical writing", "Reading complex texts", "Mastering grammar"] },
      // ],
    };

    // Function to update content dynamically
    function updateContent(grade) {
      const courseContainer = document.getElementById("course-container");
      courseContainer.innerHTML = ""; // Clear previous content

      // Generate new course cards
      courses[grade].forEach((course) => {
        const topicsList = course.topics.map((topic) => `<li>${topic}</li>`).join("");
        courseContainer.innerHTML += `
							<div class="col-md-4 d-flex">
									<div class="course-card bg-white p-4 d-flex flex-column h-100 border border-light">
											<h4 class="text-teal">${course.title}</h4>
											<p>${course.desc}</p>
											<p class="key-topics">Learning outcome</p>
											<ul>${topicsList}</ul>
											<div class="mt-auto">
												<h6 class="text-teal">${course.course_duration}</h6>
												<h6 class="text-teal">Course fee Rs: ${course.course_fee}</h6>
													<a href="#" class="view-btn">Book a demo →</a>
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													&nbsp;
													<a href="#" class="view-btn">Buy now →</a>
											</div>
									</div>
							</div>
					`;
      });

      // Update active button styling
      document.querySelectorAll(".filter-buttons .filter-btn").forEach((btn) => {
        btn.classList.remove("btn-active");
      });
      document.querySelector(`.filter-btn[data-grade="${grade}"]`).classList.add("btn-active");
    }

    // Add event listeners to buttons
    document.querySelectorAll(".filter-buttons .filter-btn").forEach((button) => {
      button.addEventListener("click", function() {
        updateContent(this.getAttribute("data-grade"));
      });
    });

    // Load default content (Grades K-2)
    document.addEventListener("DOMContentLoaded", function() {
      updateContent("k-2");
    });
  </script>
  <!-- /Starter Section Section -->
@endsection
