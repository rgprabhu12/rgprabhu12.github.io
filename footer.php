<?php
echo '<!-- Footer -->
  <footer id="footer" class="panel">
    <div class="inner split">
      <div>
        <section>
          <p>A way to show my photos off and a project for me to learn web development with.</p>
        </section>
        <section>
          <h2>Follow me on ...</h2>
          <ul class="icons">
            <li><a href="https://www.twitter.com/rohan2031 " class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/rohan2031" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/rohan2031/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://github.com/rgprabhu12" class="icon fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="https://www.linkedin.com/in/rohan-prabhu/" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
          </ul>
        </section>
        <section>
          <p>Or go the old-fashioned way and
            <a href="mailto:rgprabhu12@gmail.com" target="_top">send me an email!</a>
          </p>
        </section>
      </div>
      <div>
        <section>
          <h2>Recent Posts</h2>
          <ul class="post-list">
            {% for post in site.posts %}
              <li>
                {% assign date_format = site.minima.date_format | default: "%b %-d, %Y" %}
                <span class="post-meta">{{ post.date | date: date_format }}</span>
                <h2>
                  <a class="post-link" href="{{ post.url | relative_url }}">{{ post.title | escape }}</a>
                </h2>
              </li>
            {% endfor %}
          </ul>
        </section>
          <!--<form method="post" action="#">
            <div class="field half first">
              <input type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="field half">
              <input type="text" name="email" id="email" placeholder="Email" />
            </div>
            <div class="field">
              <textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Send" class="special" /></li>
              <li><input type="reset" value="Reset" /></li>
            </ul>
          </form>
        </section>-->
      </div>
    </div>
  </footer>'
  ?>